<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $products = Product::all();
      $products = Product::paginate(15);

      return view('product.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // $uploadedfile = $request->file('image');
      // $newFilename = $uploadedfile->store('public/products');
      // dd($newFilename);

       $productData = $request->validate(
         [
           'title' => 'required|min:3',
           'description' => 'required|min:10',
           'price' => 'required|numeric|gt:0',
           'pub_date' => 'required|after_or_equal:today',
         ]
     );

     $product = Product::create($productData);

     return 'Gegevens in de database opgeslagen!';
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

    public function showProduct($id = 0, Request $request)
    {
        return response('GO AWAY it not found', 404);
    }

    public function details($id)
    {
      $productDetail = Product::find($id);
      return view('product.details', ['product' => $productDetail]);
    }

}
