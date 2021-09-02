<?php



namespace App\Http\Controllers\Admin;


use DB;

use App\Category;

use App\User;

use App\Providers;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;



class UsersController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index($type)

    {

        //

       // $categoryMenu = Category::orderBy('category_name','asc')->get();

        $users_wf = User::select(['id','first_name','last_name','created_at','email',  
            DB::raw('(select image from media where id=users.logo) as logo'),
            DB::raw('(select image from media where id=users.banner) as banner'),
      ])->orderBy('id','desc')->get();

        foreach ($users_wf as $key => $value) {
           $providers = Providers::where(['user_id' => $value->id])->count();
           if($providers > 0){
               $users_withproviders[]=$value;
           } else{
              $users_withoutproviders[]=$value;
           }
        }
        if($type==0){
            $users=$users_withoutproviders;
        } else{
            $users=$users_withproviders;
        }
        return view('admin.users', compact('users','type'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
            echo "test";
        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

        User::destroy($id);

        Session::flash("status", 1);

        return redirect()->route('admin-users.index');

    }

}

