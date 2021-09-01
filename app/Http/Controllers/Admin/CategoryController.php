<?php



namespace App\Http\Controllers\Admin;



use App\Category;

use App\Images;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Session;

use Intervention\Image\Facades\Image;


class CategoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        //


        $categories = Category::where(['parent_id' => 0])->orderBy('id', 'desc')->get();

        return view('admin.category', compact('categories'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //


        $categories = Category::pluck('name', 'id')->all();

        return view("admin.category.create", compact('categories'));

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

        $this->validate($request, [

            "name" => "required|max:255"

        ]);


        if(isset($request->parent_id)){
            $input = $request->only('name', 'parent_id');
        } else{
            $input = $request->only('name');
        }

        if ($files = $request->file("img")) {

             foreach ($files as $file) {

                 $rand = rand(1, 999999);

                $image_name = $rand . "." . $file->getClientOriginalExtension();

                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();



                 Image::make($file->getRealPath())->resize(454, 527)->save(public_path("uploads/category/" . $image_name));

                 Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/category/" . $thumb));

                 $input['image']=$image_name;

                 $input['img_thumb']=$thumb;

                

             }

        }

        Category::create($input);

        Session::flash("status", 1);



        if(isset($input['parent_id'])){
            return redirect('admin-category/'.$input['parent_id'].'/edit?success=Inserted');
        } else{
            return redirect('admin-category/?success=Inserted');
        }

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

    public function edit($id){

        //

        $categories = Category::pluck('name', 'id')->all();
        $category = Category::find($id);

        $sub_categories = Category::where(['parent_id' => $id])->orderBy('id', 'desc')->get();


        return view("admin.category.edit", compact( 'categories','category','sub_categories'));

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

                "name" => "required|max:255"

            ]);



        $category = Category::find($id);

        if(!isset($_POST['parent_id'])){
            $input = $request->only('name', 'parent_id');
        } else{
            $input = $request->only('name');
        }
        $input = $request->only('name', 'parent_id');

        if ($files = $request->file("img")) {

             foreach ($files as $file) {

                 $rand = rand(1, 999999);

                $image_name = $rand . "." . $file->getClientOriginalExtension();

                $thumb = "thumb_" . $rand . "." . $file->getClientOriginalExtension();



                 Image::make($file->getRealPath())->resize(454, 527)->save(public_path("uploads/category/" . $image_name));

                 Image::make($file->getRealPath())->resize(235, 235)->save(public_path("uploads/category/" . $thumb));

                 $input['image']=$image_name;

                 $input['img_thumb']=$thumb;

                

             }
         }
        $category->update($input);



        Session::flash("status", 1);

        $success="Updated";

        return redirect('admin-category/'.$id.'/edit?success=Updated');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {


        $category = Category::find($id);

       

        $category->delete();



        Session::flash("status", 1);

        if(isset($category->parent_id) && $category->parent_id!=0){
            return redirect('admin-category/'.$category->parent_id.'/edit?success=Deleted');
        } else{
            return redirect('admin-category/?success=Deleted');
        }
        return redirect()->route('admin-category.index');

    }

}

