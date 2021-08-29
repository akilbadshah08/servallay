<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Library;
use App\Video_category;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mdata = Library::orderBy('id', 'desc')->paginate(5);
        return view('admin.librarys.list', compact('mdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $featured_options=["Yes" => 'Yes','No' => "No"];
        $trainers = Trainer::pluck("trainer_name", "id")->all();
        $video_categories = Video_category::get();
        $vc=[];
        foreach($video_categories as $key=>$value){
            $parent_category = Video_category::where('id',$value->parent_id)->first();
            if(isset($parent_category) && !empty($parent_category)){
                $category_name=$parent_category->category_name;
            } else{
                $category_name="root";
            }
            $vc[$value->id]=$value->category_name.'('.$category_name.')';
        }
        $video_categories=$vc;
        $librarys = Library::pluck("library_name", "id")->all();
        return view("admin.librarys.create", compact('librarys','video_categories','featured_options','trainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,
            [
                "library_name" => "required",
                "library_detail" => "required",
                'category_id' => 'required',
                'time' => 'required',
                'amount' => 'required',
                "img" => "required"
            ]);


        $input = $request->only('library_name', 'library_detail','library_url','category_id','time','amount','trainer_id','trainer_id_2','sub_title');


        $imgs = array();

        if ($files = $request->file("img")) {
             foreach ($files as $file) {
                 $rand = rand(1, 999999);
                $image_name = $rand . "." . $file->getClientOriginalExtension();
                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();

                 Image::make($file->getRealPath())->resize(358, 200)->save(public_path("uploads/" . $image_name));
                 Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));
                 $input['img']=$image_name;
                 $input['img_thumb']=$thumb;
                
             }
        }
        $library = Library::create($input);

        Session::flash("status", 1);
        return redirect()->route('admin-librarys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $featured_options=["Yes" => 'Yes','No' => "No"];
        $trainers = Trainer::pluck("trainer_name", "id")->all();
        $video_categories = Video_category::get();
        $vc=[];
        foreach($video_categories as $key=>$value){
            $parent_category = Video_category::where('id',$value->parent_id)->first();
            if(isset($parent_category) && !empty($parent_category)){
                $category_name=$parent_category->category_name;
            } else{
                $category_name="root";
            }
            $vc[$value->id]=$value->category_name.'('.$category_name.')';
        }
        $video_categories=$vc;
        $librarys = Library::find($id);
        return view("admin.librarys.edit", compact('video_categories', 'librarys','trainers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request,
            [
                "library_name" => "required",
                "library_detail" => "required",
                'category_id' => 'required',
                'time' => 'required',
                'amount' => 'required',
            ]);


        $input = $request->only('library_name', 'library_detail','library_url','category_id','time','trainer_id','trainer_id_2','amount','sub_title');



        $imgs = array();
    
        if ($files = $request->file("img")) {
             foreach ($files as $file) {
                 $rand = rand(1, 999999);
                $image_name = $rand . "." . $file->getClientOriginalExtension();
                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();

                 Image::make($file->getRealPath())->resize(358, 200)->save(public_path("uploads/" . $image_name));
                 Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));
                 $input['img']=$image_name;
                 $input['img_thumb']=$thumb;
                
             }
        }

        //         print_r($input);
        // die;
         

        $librarys = Library::find($id);
        $librarys->update($input);
        
//        Session::flash("status", 1);
        return redirect()->route('admin-librarys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Library::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-librarys.index');


    }
}
