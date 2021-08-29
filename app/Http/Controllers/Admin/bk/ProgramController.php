<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Program;
use App\Video_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cdata = Program::orderBy('id', 'desc')->paginate(5);
        return view('admin.programs.list', compact('cdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $video_categories = Video_category::pluck("category_name", "id")->all();
        $programs = Program::pluck("program_name", "id")->all();
        return view("admin.programs.create", compact('programs','video_categories'));
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
                "program_name" => "required",
                "program_details" => "required",
                "category_id" => "required",
                "amount" => "required",
                "number_of_videos" => "required",
                "total_days" => "required",
                "sub_title" => "required",
                "img" => "required"
            ]);


        $input = $request->only('program_name', 'program_details','category_id','sub_title','total_days','number_of_videos','amount');



        $imgs = array();

        if ($files = $request->file("img")) {
             foreach ($files as $file) {
                 $rand = rand(1, 999999);
                $image_name = $rand . "." . $file->getClientOriginalExtension();
                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();

                 Image::make($file->getRealPath())->resize(454, 527)->save(public_path("uploads/" . $image_name));
                 Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));
                 $input['img']=$image_name;
                 $input['img_thumb']=$thumb;
                
             }
        }
        $program = Program::create($input);

        Session::flash("status", 1);
        return redirect()->route('admin-programs.index');
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
        $video_categories = Video_category::pluck("category_name", "id")->all();
        $cdata = Program::find($id);
        return view("admin.programs.edit", compact('cdata','video_categories'));
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
                "program_name" => "required",
                "program_details" => "required",
                "category_id" => "required",
                "amount" => "required",
                "number_of_videos" => "required",
                "total_days" => "required",
                "sub_title" => "required",
            ]);


        $input = $request->only('program_name', 'program_details','category_id','sub_title','total_days','number_of_videos','amount');
        $imgs = array();
    
        if ($files = $request->file("img")) {
             foreach ($files as $file) {
                 $rand = rand(1, 999999);
                $image_name = $rand . "." . $file->getClientOriginalExtension();
                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();

                 Image::make($file->getRealPath())->resize(454, 527)->save(public_path("uploads/" . $image_name));
                 Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));
                 $input['img']=$image_name;
                 $input['img_thumb']=$thumb;
                
             }
        }
         
        $programs = Program::find($id);
        $programs->update($input);
        
        Session::flash("status", 1);
        return redirect()->route('admin-programs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        Program::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-programs.index');


    }
}
