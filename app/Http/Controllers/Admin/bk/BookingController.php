<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Payment;
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
        $mdata = Payment::orderBy('id', 'desc')->paginate(5);
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
        $librarys = Payment::pluck("library_name", "id")->all();
        return view("admin.librarys.create", compact('librarys'));
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
                "img" => "required"
            ]);


        $input = $request->only('library_name', 'library_detail','library_url');



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
        $librarys = Library::find($id);
        return view("admin.librarys.edit", compact('categoriess', 'librarys'));
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
            ]);
        $input = $request->only('library_name', 'library_detail','library_url');


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
         

        $librarys = Library::find($id);
        $librarys->update($input);
        
        Session::flash("status", 1);
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
        //
        $img = Images::where('imageable_id', $id)->get();
        foreach ($img as $im) {
            @unlink(public_path("uploads/" . $im->name));
            @unlink(public_path("uploads/thumb_" . $im->name));
        }

        Images::where("imageable_id", $id)->where("imageable_type", "App\Library")->delete();

        Library::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-librarys.index');


    }
}
