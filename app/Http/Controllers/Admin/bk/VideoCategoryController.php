<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Video_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class VideoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cdata = Video_category::orderBy('id', 'desc')->paginate(5);
        return view('admin.category.list', compact('cdata'));
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
        return view("admin.category.create", compact('video_categories'));
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
                "category_name" => "required",

            ]);


        $input = $request->only('category_name','parent_id','category_desc');
        
        $product = Video_category::create($input);


        $imgs = array();

        // if ($files = $request->file("img")) {
        //     foreach ($files as $file) {
        //         $rand = rand(1, 999999);
        //         $image_name = $rand . "." . $file->getClientOriginalExtension();
        //         $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();

        //         Image::make($file->getRealPath())->resize(454, 527)->save(public_path("uploads/" . $image_name));
        //         Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));

        //         $input = [];
        //         $input["name"] = $image_name;
        //         $input["imageable_id"] = $product->id;
        //         $input["imageable_type"] = "App\Product";


        //         $imgs[] = $image_name;
        //         Images::create($input);
        //     }
        // }
        Session::flash("status", 1);
        return redirect()->route('admin-video-category.index');
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
        
        $cdata = Video_category::find($id);
        return view("admin.category.edit", compact('cdata','video_categories'));
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
            "category_name" => "required",
        ]);
        $input = $request->only('category_name','parent_id','category_desc');        
        $video_categories = Video_category::find($id);
        $video_categories->update($input);

        $imgs = array();

        // if ($files = $request->file("img")) {
            
        //     foreach ($products->images as $product) {
        //         $image_name = $product->name;
        //         $thumb = "thumb_" . $product->name;
        //         foreach ($files as $file) {
        //             Image::make($file->getRealPath())->resize(454, 527)->save(public_path("uploads/" . $image_name));
        //             Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));
        //         }

        //         $imgs[] = $image_name;

        //     }
        // }

        Session::flash("status", 1);
        return redirect()->route('admin-video-category.index');
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


        Video_category::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-video-category.index');


    }
}
