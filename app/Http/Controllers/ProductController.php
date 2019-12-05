<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Nu zitten we in de products controller";
    }

    public function showProduct($id = 0, Request $request)
    {
        return response('GO AWAY it not found', 404);
    }
}
