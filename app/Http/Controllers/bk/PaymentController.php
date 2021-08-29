<?php

namespace App\Http\Controllers;

use App\Category;
use App\Services\PaymentService;
use App\Order;
use App\Basket;
use App\BasketProduct;
use App\User;
use App\UserDetail;
use Illuminate\Support\Facades\Hash;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {

       session('active_basket_id');
       if (Cart::content()->count() == 0) {
            return redirect()->route('product');
        }
         $random       = rand(1, 10000);
         session()->put('order_no', $random);
         $userDetails=[];
        if (Auth::check()) {
          $userDetails = UserDetail::where('user_id',Auth::id())->get(); 
          $userDetails=$userDetails[0];
        } 
        // $data         = [];
        // $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        // $user_detail  = Auth::user()->detail;
        // $user         = Auth::user();
        // $order        = Cart::total();
        // $random       = rand(1, 10000);

        // $data["user_detail"]  = $user_detail;
        // $data["user"]         = $user;
        // $data["order"]        = $order;
        // $data["categoryMenu"] = $categoryMenu;

        // session()->put('order_no', $random);


        // $service = new PaymentService();
        // $form                   = [];
        // $form['sessionOrderNo'] = session('order_no');
        // $form['orderPrice']     = $order;
        // $form['basketID']       = session('active_basket_id');
        // $form['route']          = 'pay';
        // $form['userID']         = Auth::id();
        // $form['name']           = Auth::user()->name;
        // $form['surname']        = Auth::user()->surname;
        // $form['phone']          = Auth::user()->detail->phone;
        // $form['email']          = Auth::user()->email;
        // $form['city']           = Auth::user()->detail->city;
        // $form['country']        = Auth::user()->detail->country;
        // $form['zipcode']        = Auth::user()->detail->zipcode;
        // $form['address']        = Auth::user()->detail->address;

        // $data['getFormContent'] = $service->IyzicoForm($form);
        // $service->IyzicoForm($form);

        return view('payment',compact('userDetails'));
    }

    public function pay(Request $request)
    {

        try{
            $this->validate($request,
            [
                "address" => "required",
            ]);
            if (!Auth::check()) {
                $pass=date('ymdhis');
                 $create = User::create([
                'name' => $request['name'],
                'surname' => $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($pass),
                ]);
    
    
                if ($create)
                {
                    $input = [];
                    $input["user_id"] = $create->id;
                    UserDetail::create($input);
                    Auth::loginUsingId($create->id);
                    $html=' 
                    <p>Dear ,'.Auth::user()->name." ".Auth::user()->surname.'</p>
                    <p>Welcome to DANSCOOL!  We are thrilled to have you as a DANSCOOL member.  You have made a wise decision to take your physical, mental and spiritual well-being seriously by joining DANSCOOL to work out, dance, sweat and have fun, while learning  the great skill of dance.</p>  
                    <p>Your Passowrd:'. $pass .' </p>
                    <p>Please keep your password secure and do not share your login details.</p>
                    <p>Again, Welcome to the DANSCOOL family and thank you for choosing DANSCOOL as your place to train, dance, workout and have fun!</p>
                    <p><br>Cheers!</p>';
                    $headers = "From: " . strip_tags('infodanscool@gmail.com') . "\r\n";
                    $headers .= "Reply-To: ". strip_tags('infodanscool@gmail.com') . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    mail($request['email'],"WELCOME TO DANSCOOL - PASSWORD",$html,$headers); 
                
                }
                  $active_basket = Basket::create([
                        'user_id' => Auth::id()
                    ]);
                $active_basket_id = $active_basket->id;
                session()->put('active_basket_id', $active_basket_id);    
                foreach(Cart::content() as $productCartItem){
                     BasketProduct::updateOrCreate(
                        ['basket_id' => $active_basket_id, 'product_id' => $productCartItem->id],
                        ['quantity' => $productCartItem->qty, 'price' => $productCartItem->price, 'status' => 'Your orders have received.','size'=>$productCartItem->options->size]
                    );                     
                 }
    
            }
            $stripe = new \Stripe\StripeClient(
                'sk_test_jJ0iwaMXJPAjaAblvnXR0sPP'
                );
            if(isset($_REQUEST['stripeToken']) && $_REQUEST['stripeToken']){
                
                $customer=$stripe->customers->create([
                      'description' => Auth::user()->name,
                      'email' => Auth::user()->email,
                    ]);
                $userd=UserDetail::where(['user_id' => Auth::id()]); 
                $userd->update(['stripe_id' => $customer->id]);
                $source=$stripe->customers->createSource(
                  $customer->id,
                  ['source' => $_REQUEST['stripeToken']]
                );
                $charge = $stripe->charges->create([
                    'amount' => Cart::total()*100, // $15.00 this time
                    'currency' => 'usd',
                    'customer' => $customer->id, // Previously stored, then retrieved
                ]);
              //  echo "without stripe";
            } else if(isset($_REQUEST['stripe_id'])){
            
                $charge = $stripe->charges->create([
                'amount' => Cart::total()*100, // $15.00 this time
                'currency' => 'usd',
                'customer' => $_REQUEST['stripe_id'], // Previously stored, then retrieved
                ]);
                
            }
//            print_r($charge);
            if(isset($charge->status) && $charge->status=='succeeded'){
            
                $token   = session('_token');
                $orderNo = session('order_no');
                $abi=session('active_basket_id');
                $input = $request->only('name', 'last_name','address','m_phone');
                $order                   = [];
                $order['name']           = $input['name'].' '.$input['last_name'];
                $order['address']        = $input['address'];
                $order['phone']          = $input['m_phone'];
                $order['m_phone']        = $input['m_phone'];
                $order['basket_id']      = session('active_basket_id');
                $order['user_id']        = Auth::id();
                $order['installments']   = 1;
                $order['status']         = "Your order has been received";
                $order['payment_method'] = "Credit Cart";
                $order['order_price']    = Cart::total();
                $order['token']          = $token;
                $order['order_no']       = session('order_no');
        
        
                Order::create($order);
                Cart::destroy();
                session()->forget('active_basket_id');
                session()->forget('order_no');
        
                Session::flash("status", 2);
                echo json_encode(['status' => 1, 'data' => $order]);
  
            } else{
                echo "Transaction Fails";
                die;
               // return redirect()->route('checkout');
            }
        }
        catch(\Exception $e){
            echo json_encode(['status' => 0, 'error' => $e->getMessage()]);
            die;
        }
      //  return redirect()->route('orders');
    }
}
