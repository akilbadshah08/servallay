<?php

namespace App\Http\Controllers\Admin;

use App\Images;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{

	public function index()
    {
        //
        return view('admin.dashboard.index');
    }

}