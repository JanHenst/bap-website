<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function longUrl()
  {
      return "Dit was een lange url!";
  }
}
