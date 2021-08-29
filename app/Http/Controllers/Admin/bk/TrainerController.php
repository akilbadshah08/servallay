<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cdata = Trainer::orderBy('id', 'desc')->paginate(5);
        return view('admin.trainers.list', compact('cdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $trainers = Trainer::pluck("trainer_name", "id")->all();
        return view("admin.trainers.create", compact('trainers'));
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
                "trainer_name" => "required",
                "trainer_details" => "required"
            ]);


        $input = $request->only('trainer_name', 'trainer_details');

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
        $trainer = Trainer::create($input);

        Session::flash("status", 1);
        return redirect()->route('admin-trainers.index');
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
        $cdata = Trainer::find($id);
        return view("admin.trainers.edit", compact('cdata'));
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
                "trainer_name" => "required",
                "trainer_details" => "required",
            ]);
        $input = $request->only('trainer_name', 'trainer_details');


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
         

        $trainers = Trainer::find($id);
        $trainers->update($input);
        
        Session::flash("status", 1);
        return redirect()->route('admin-trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Trainer::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-trainers.index');


    }
}
