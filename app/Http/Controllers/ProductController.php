<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Nu zitten we in de products controller";
    }

    public function showProduct($category, $id)
    {
      return 'Category = ' . $category . ' en id = ' . $id;
      // return view('product');
    }
}
