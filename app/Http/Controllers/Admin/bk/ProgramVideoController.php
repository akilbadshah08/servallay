<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Program_video;
use App\Trainer;
use App\Program;
use App\Video_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProgramVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($program_id=0)
    {
        //
        $cdata = Program_video::orderBy('id', 'desc')->paginate(5);
        return view('admin.program_videos.list', compact('cdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $programs = Program::get();
        $pc=[];
        foreach($programs as $key=>$value){
            $pc[$value->id]=$value->program_name.'('.$value->sub_title.')';
        }
        $programs=$pc;
        
        $trainers = Trainer::pluck("trainer_name", "id")->all();
        $program_videos = Program_video::pluck("library_name", "id")->all();
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
        return view("admin.program_videos.create", compact('program_videos','video_categories','trainers','programs'));
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
                "library_url" => "required",
                "trainer_id" => "required",
                "program_time" => "required",
                "library_detail" => "required"
            ]);


        $input = $request->only('program_id','other_url','list_index','sub_title', 'trainer_id','trainer_id_2','category_id','library_url','library_name','library_detail','program_time');



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
        $program_video = Program_video::create($input);

        Session::flash("status", 1);
        return redirect()->route('admin-program-videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($program_id)
    {
        if($program_id!=0){
            $cdata = Program_video::where('program_id', $program_id)->orderBy('id', 'desc')->paginate(5);
        } else{
            $cdata = Program_video::orderBy('id', 'desc')->paginate(5);
        }
        return view('admin.program_videos.list', compact('cdata'));
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
        $programs = Program::get();
        $pc=[];
        foreach($programs as $key=>$value){
            $pc[$value->id]=$value->program_name.'('.$value->sub_title.')';
        }
        $programs=$pc;
        
        $trainers = Trainer::pluck("trainer_name", "id")->all();
        $cdata = Program_video::find($id);
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
        return view("admin.program_videos.edit", compact('trainers','video_categories','programs', 'cdata'));
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
                "library_url" => "required",
                "trainer_id" => "required",
                "program_time" => "required",
                "library_detail" => "required"
            ]);
 
        $input = $request->only('program_id','other_url','list_index','sub_title', 'trainer_id','trainer_id_2','category_id','library_url','library_name','library_detail','program_time');



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
         

        $program_videos = Program_video::find($id);
        $program_videos->update($input);
        
        Session::flash("status", 1);
        return redirect()->route('admin-program-videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Program_video::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-program-videos.index');


    }
}
