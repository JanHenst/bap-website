<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $products = [
          'Auto',
          'Lamp',
          'Telefoon',
          'Mens'
        ];
        
        return view('home', ['producten' => $products]);
    }

    public function showName($name)
    {
      return view('showname', ['naam' => $name]);
    }
}
