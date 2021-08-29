<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Product;
use App\Video_category;
use App\Program;
use App\Program_video;
use App\Library;
use App\Trainer;
use App\Blog;
use App\Payment;
use App\UserDetail;
use App\Stripe;
use App\Contact;
use App\Contactrequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $products = Product::orderBy('id','desc')->get();
        $blogs = Blog::orderBy('id','desc')->get();
        return view('index', compact( 'products','categoryMenu','blogs'));
    }

    public function index()
    {
        

        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $products = Product::orderBy('id','desc')->take(3)->get();
        $blogs = Blog::orderBy('id','desc')->take(3)->get();
        return view('htmlblade/index', compact( 'products','blogs','categoryMenu'));
    }

    public function subscription()
    {
        $charge=[];
        if(isset($_REQUEST['stripeToken'])){
            try{
            $stripe = new \Stripe\StripeClient(
            'sk_test_jJ0iwaMXJPAjaAblvnXR0sPP'
            );
            $customer=$stripe->customers->create([
                  'description' => Auth::user()->name,
                  'email' => Auth::user()->email,
                ]);
            $source=$stripe->customers->createSource(
              $customer->id,
              ['source' => $_REQUEST['stripeToken']]
            );
            $charge = $stripe->charges->create([
                'amount' => $_REQUEST['plan'], // $15.00 this time
                'currency' => 'usd',
                'customer' => $customer->id, // Previously stored, then retrieved
            ]);
            //print_r($charge);
            Payment::insert(['user_id' => Auth::id(),'plan_id' => $_REQUEST['plan'], 'amount' => $_REQUEST['plan']/100, 'payment_id' => $charge->id]);
             $user = UserDetail::where('user_id',Auth::id());
             $user->update(['plan' => $_REQUEST['plan'],'stripe_id' => $customer->id, 'plan_date' => date('Y-m-d',strtotime(date('Y-m-d'). ' +90 days'))]);
                     Session::flash("status", 1);

            }
            catch(\Exception $e){
                echo $e->getMessage();
                //die;
            }

        }
        $user = UserDetail::where('user_id',Auth::id())->get();
        
        return view('htmlblade/subscription',compact('charge','user'));

    }
    public function category($slug){
        $categories = Category::pluck("category_name", "slug")->all();
        $category = Category::where("slug",$slug)->first();
        $products = Product::with('categories')->where('category_id',$category->id)->get();
        return view('htmlblade/shop', compact('category','products','categories'));
    }

    public function contactsubmit(Request $request){
        $input = $request->only('name','last-name','email','mobile');
        
        $html='<p>Dear '.$input['name'].'..,</p>
        <p>We are delighted that you are interested in joining us!  No other platform offers our incredible lineup of world-renowned teachers, our 8-video series that progresses from beginner to advanced levels, the ability to take classes with your teacher on Zoom or in-studio, and much more. </p>
        <p>ENJOY these 15-minute classes for every dance style we offer, and then invite your friends to the fun!  Become a member and enjoy our incredible video library of hundreds of 40-minute videos of many dance styles. See you on the dance floor! </p>
        <p>Here’s your link to your FREE videos:</p> 
        <p>https://www.youtube.com/channel/UC4ubcK5iBmyOLrGWa83eq1g/featured </p>
        
        <p>CHEERS!</p>
        <p>Danscool</p>';
        
        $headers = "From: " . strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        mail($input['email'],'Free Subscription',$html,$headers); 

        $contact = Contactrequest::create($input);
        echo json_encode('success');
        // $categoryMenu = Category::orderBy('category_name','asc')->get();
        // $category = Category::where("slug",$slug)->first();
        // $products = Product::with('categories')->where('category_id',$category->id)->get();
        // return view('category-details', compact('category','products','categoryMenu'));
    }

    // public function product($slug){
    //     $categoryMenu = Category::orderBy('category_name','asc')->get();
    //     $product = Product::where("slug",$slug)->first();
    //     $bcrumb = $product->categories()->distinct()->get();
    //     return view('product-detail', compact('product','bcrumb','categoryMenu'));
    // }
        
    public function programs(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $video_category = Video_category::orderBy('id','asc')->get();
        $programs = Program::orderBy('id','desc')->get();
        
        $payments=Payment::where('user_id',Auth::id())->orderBy('id','asc')->get();
        $fpay=[];
        foreach ($payments as $key => $value) {
            if(isset($value->program_id) && $value->program_id!='')
            $fpay[$value->program_id]=$value;
        }
        $n_data=[];
        foreach ($video_category as $key => $value) {
                $vdata['programs']=[];
                foreach ($programs as $key => $v_value) {
                    if($v_value->category_id==$value->id){
                        $program_videos = Program_video::where('program_id',$v_value->id)->orderBy('list_index','asc')->get();
                        $v_value->videos=$program_videos;
                        $vdata['programs'][]=$v_value;
                    }
                }
                if(!empty($vdata['programs'])){
                    $vdata['category_name']=$value->category_name;
                     $n_data[]= $vdata;
                }    
                
              
        }
        // echo "<pre>";    
        // print_r($n_data);
        // die;
        
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade/programs', compact('n_data','fpay'));
    }

    public function program_detail($slug){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $libraries = Library::orderBy('id','desc')->get();
        
        $userDetails = UserDetail::where('user_id',Auth::id())->get();
        $video_category = Video_category::orderBy('id','asc')->get();
        $programs=Program::where('slug',$slug)->orderBy('id','desc')->get();
        $program=$programs[0];
        if(!empty($programs)){
            $libraries = Program_video::where('program_id',$programs[0]->id)->orderBy('list_index','Asc')->get();
            $active=$slug;
        }
        $video_category_org=[];
        foreach ($video_category as $element) {
            $video_category_org[$element->id]=$element;
        }
        $trainers = Trainer::orderBy('id','desc')->get();
        $trainer = Trainer::orderBy('id','desc')->get();
        foreach ($trainer as $key => $value) {
            $temp_trainer[$value->id]=$value;
        }
        $payments=Payment::where('user_id',Auth::id())->orderBy('id','asc')->get();
        $fpay=[];
        foreach ($payments as $key => $value) {
            if(isset($value->program_id) && $value->program_id!='')
            $fpay[$value->program_id]=$value;
        }
        $trainers=$temp_trainer;
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade/programs_detail', compact('video_category','program','fpay','trainers','video_category_org','libraries','userDetails'));
    }


    public function product(){
        // $categoryMenu = Category::orderBy('category_name','asc')->get();
        // $product = Product::where("slug",$slug)->first();
        // $bcrumb = $product->categories()->distinct()->get();
        $categories = Category::pluck("category_name", "slug")->all();
        $products = Product::orderBy('id','desc');
        if(isset($_GET['s'])){
            $products=$products->where('product_name', 'like', '%' . Input::get('s') . '%');
        }
        $products=$products->get();
        return view('htmlblade/shop',compact('products','categories'));
    }

    public function productdetail($slug){
        // $categoryMenu = Category::orderBy('category_name','asc')->get();
        // $product = Product::where("slug",$slug)->first();
        // $bcrumb = $product->categories()->distinct()->get();
        $product = Product::where("slug",$slug)->first();
        return view('htmlblade/shopdetail',compact('product'));
    }


    public function product_2($slug){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $product = Product::where("slug",$slug)->first();
        $bcrumb = $product->categories()->distinct()->get();
        return view('product-detail');
    }
    
    
    public function blogs(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $blogs = Blog::orderBy('id','desc')->get();
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade/blog', compact('blogs'));
    }
    public function pay(){
       try{
        $userDetails = UserDetail::where('user_id',Auth::id())->get();
        $userDetails=$userDetails[0];
        $stripe = new \Stripe\StripeClient(
            'sk_test_jJ0iwaMXJPAjaAblvnXR0sPP'
            );
            $charge = $stripe->charges->create([
                'amount' => $_REQUEST['amount']*100, // $15.00 this time
                'currency' => 'usd',
                'customer' => $userDetails->stripe_id, // Previously stored, then retrieved
            ]);
            if($charge->status=='succeeded'){
                $insert=['user_id' => Auth::id(), 'amount' => $_REQUEST['amount'], 'payment_id' => $charge->id];
                
                if(isset($_REQUEST['lib'])){
                    $insert['library_id']=$_REQUEST['lib'];
                    $libraries = Library::where('id',$_REQUEST['lib'])->get();
                    $library=$libraries[0];
                    Payment::insert($insert);

                    echo json_encode('<video  controls>
                          <source src="'.$library->library_url.'" type="video/mp4">
                          </video>');

                } else if(isset($_REQUEST['pro'])){
                    $insert['program_id']=$_REQUEST['pro'];
                    Payment::insert($insert);
                    echo json_encode("success");
                }
            } else{
                
                echo json_encode(["failed"]);
            }
             }
            catch(\Exception $e){
                echo json_encode(["failed"]);
                echo $e->getMessage();
                //die;
            }

    }
    public function libraries_history(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $video_category = Video_category::orderBy('id','asc')->get();
        $userDetails = UserDetail::where('user_id',Auth::id())->get();
        $userDetails=$userDetails[0];
        $payments=Payment::where('user_id',Auth::id())->orderBy('id','asc')->get();
        $fpay=[];
        foreach ($payments as $key => $value) {
            if(isset($value->library_id) && $value->library_id!='')
            $fpay[$value->library_id]=$value;
            $lib_ids[]=$value->library_id;
        }

        $libraries = Library::whereIn('id',$lib_ids)->orderBy('sub_title','asc')->get();
        $active="noactive";
        $trainer = Trainer::orderBy('id','desc')->get();
        foreach ($trainer as $key => $value) {
            $temp_trainer[$value->id]=$value;
        }
        $trainer=$temp_trainer;
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade.library_history', compact('libraries','video_category','trainer','active','userDetails','fpay'));
    }

    public function library($slug=""){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $video_category = Video_category::orderBy('id','asc')->get();
        $userDetails = UserDetail::where('user_id',Auth::id())->get();
        $userDetails=$userDetails[0];
        $payments=Payment::where('user_id',Auth::id())->orderBy('id','asc')->get();
        $fpay=[];
        foreach ($payments as $key => $value) {
            if(isset($value->library_id) && $value->library_id!='')
            $fpay[$value->library_id]=$value;
        }
        $active="";
        if($slug!=''){
            $categories=Video_category::where('slug',$slug)->orderBy('id','desc')->get();
            if(!empty($categories)){
                $libraries = Library::where('category_id',$categories[0]->id)->orderBy('id','asc')->get();
                $active=$slug;
            }
        } else{
            $categories=Video_category::where('not_free_first',0)->orderBy('id','desc')->pluck('id','id');
            if(!empty($categories)){
                $libraries = Library::wherein('category_id',$categories)->where('sub_title',1)->orderBy('sub_title','asc')->get();
            }
            
        }
        
        $trainer = Trainer::orderBy('id','desc')->get();
        foreach ($trainer as $key => $value) {
            $temp_trainer[$value->id]=$value;
        }
        $trainer=$temp_trainer;
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade.library', compact('libraries','video_category','trainer','active','userDetails','fpay'));
    }

    public function livevirtual(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $video_category = Video_category::orderBy('id','asc')->get();
        $libraries = Library::orderBy('id','desc')->get();
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade/livevirtual', compact('libraries','video_category'));
    }

    public function instudio(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $video_category = Video_category::orderBy('id','asc')->get();
        $libraries = Library::orderBy('id','desc')->get();
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade/instudio', compact('libraries','video_category'));
    }

    public function blog_detail($slug){
        // $categoryMenu = Category::orderBy('category_name','asc')->get();
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $blogs = Blog::orderBy('id','desc')->get();
         $blog = Blog::where("slug",$slug)->first();
        // $bcrumb = $product->categories()->distinct()->get();
        return view('htmlblade/blogdetail',compact('blog','blogs'));
    }

    public function contact(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        return view('htmlblade/contact', compact('categoryMenu'));
    }
    public function contact_submit(Request $request){
         $this->validate($request,
            [
                "name" => "required",
                "email" => "required|email",
                "message" => "required",
                "phone" => 'regex:/[0-9]{10}/'
              
            ]);
            
        $input = $request->only('name','email','message','phone');
        $html='<p>Dear Manager...,</p>
        <p><strong>Name:</strong>'.$input['name'].'</p>
        <p><strong>Email:</strong>'.$input['email'].'</p>
        <p><strong>Phone:</strong>'.$input['phone'].'</p>
        <p><strong>Message:</strong>'.$input['message'].'</p>';
        
        $headers = "From: " . strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        mail('infodanscool@gmail.com','Query Request',$html,$headers); 

    

        //print_r($input);
        // $userDetail = UserDetail::find(Auth::id());
         $contact = Contact::create($input);

         return redirect()->route('contact')->with('message', 'Successfully Submitted, will contact you soon.');
    }
    
    
    public function myoption(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $products = Product::orderBy('id','desc')->take(3)->get();
        return view('htmlblade/myoption', compact('categoryMenu','products'));
    }
}
