<?php



namespace App\Http\Controllers;



use App\Images;

use App\Blog;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;

use Intervention\Image\Facades\Image;



class MHomeController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function innerpage($page)

    {

        //
        echo $page;

        return view('frontfile', compact('page'));

    }
}