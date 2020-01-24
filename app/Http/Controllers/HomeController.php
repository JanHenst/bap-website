<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blogs::orderBy('id', 'desc')->paginate(3);

        return view('home', ['blogs' => $blogs]);

    }
}
