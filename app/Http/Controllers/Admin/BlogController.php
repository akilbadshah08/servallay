<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mdata = Blog::orderBy('id', 'desc')->paginate(5);
        return view('admin.blogs', compact('mdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blogs = Blog::pluck("blog_name", "id")->all();
        return view("admin.blogs-create", compact('blogs'));
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
                "blog_name" => "required",
                "blog_detail" => "required",
                "img" => "required"
            ]);


        $input = $request->only('blog_name', 'blog_detail');

        $blog = Blog::create($input);


        $imgs = array();

        if ($files = $request->file("img")) {
            foreach ($files as $file) {
                $rand = rand(1, 999999);
                $image_name = $rand . "." . $file->getClientOriginalExtension();
                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();

                Image::make($file->getRealPath())->resize(730,485)->save(public_path("uploads/" . $image_name));
                Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));

                $input = [];
                $input["name"] = $image_name;
                $input["imageable_id"] = $blog->id;
                $input["imageable_type"] = "App\Blog";


                $imgs[] = $image_name;
                Images::create($input);
            }
        }
        Session::flash("status", 1);
        return redirect()->route('admin-blogs.index');
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
        $blogs = Blog::find($id);
        return view("admin.blogs-edit", compact('blogs'));
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

                "blog_detail" => "required",
            
            ]);
        $input = $request->only('category_id', 'blog_name', 'blog_detail');
        $blogs = Blog::find($id);
        $blogs->update($input);


        $imgs = array();

        if ($files = $request->file("img")) {
            foreach ($blogs->images as $blog) {
                $image_name = $blog->name;
                $thumb = "thumb_" . $blog->name;
                foreach ($files as $file) {
                    Image::make($file->getRealPath())->resize(730,485)->save(public_path("uploads/" . $image_name));
                    Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/" . $thumb));
                }

                $imgs[] = $image_name;

            }
        }

        Session::flash("status", 1);
        return redirect()->request()->headers->get('referer');
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
        $img = Images::where('imageable_id', $id)->get();
        foreach ($img as $im) {
            @unlink(public_path("uploads/" . $im->name));
            @unlink(public_path("uploads/thumb_" . $im->name));
        }

        Images::where("imageable_id", $id)->where("imageable_type", "App\Blog")->delete();

        Blog::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-blogs.index');


    }
}
