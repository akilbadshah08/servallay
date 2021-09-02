<?php



namespace App\Http\Controllers\Admin;


use DB;
use App\Category;

use App\Images;

use App\Providers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Session;



class ProvidersController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index($id)

    {

        //


        $providers = Providers:: select(['name','provider_type','created_at','id','category','sub_category',  
        	DB::raw('(select image from media where id=providers.logo) as logo_image'),
        	DB::raw('(select name from category where id=providers.category) as category_name'),
        	DB::raw('(select name from category where id=providers.sub_category) as sub_category_name'),
    ])->where(['user_id' => $id])->orderBy('id', 'desc')->get();
    //    print_r($providers);
        return view('admin.providers.list', compact('providers'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

        $categoryMenu = Category::orderBy('category_name', 'asc')->get();

        $categories = Category::pluck('category_name', 'id')->all();

        return view("admin.category-create", compact('categories', 'categoryMenu'));

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

            "category_name" => "required|max:255"

        ]);



        $data = ['category_name' => $request->category_name];

        Category::create($data);

        Session::flash("status", 1);



        return redirect()->route('admin-category.index');

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

        $categoryMenu = Category::orderBy('category_name', 'asc')->get();

        $category = Category::find($id);

        $categories = Category::pluck('category_name', 'id')->all();

        return view("admin.category-edit", compact('category', 'categories', 'categoryMenu'));

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

                "category_name" => "required|max:255"

            ]);



        $category = Category::find($id);



        $data = ['category_name' => $request->category_name];

        $category->update($data);



        Session::flash("status", 1);

        return redirect()->route('admin-category.index');

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



        $products = Product::where('category_id', $id)->get();



        foreach ($products as $product) {

            foreach ($product->images as $image) {

                unlink(public_path("uploads/" . $image->name));

                unlink(public_path("uploads/thumb_" . $image->name));

            }

            Images::where("imageable_id", $product->id)->where("imageable_type", "App\Product")->delete();

        }



        $category = Category::find($id);

        $category->allProducts()->detach();

        $category->delete();



        Session::flash("status", 1);

        return redirect()->route('admin-category.index');

    }

}

