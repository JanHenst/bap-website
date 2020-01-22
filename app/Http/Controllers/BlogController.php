<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $products = Product::all();
    $blogs = Blogs::paginate(3);

    return view('blog.list', ['blogs' => $blogs]);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('blog.form');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $blogData = $request->validate(
      [
        'title' => 'required|min:5',
        'description' => 'required|min:20',
        'pub_date' => 'required|after_or_equal:today',
      ]
  );

  $blog = Blogs::create($blogData);

  return view('blog.list');

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
  }

  public function details($id)
  {
    $blogDetail = Blogs::find($id);
    return view('blog.details', ['blog' => $blogDetail]);
  }

}
