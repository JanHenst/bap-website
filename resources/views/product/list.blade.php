@extends('layouts.app')

@section('header')
<h2>Alle producten</h2>
@endsection

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Pub_date</th>
    </tr>
  </thead>
  @foreach($products as $product)
    <tbody>
      <tr>
        <td><a href="{{ route('product.details', ['id' => $product->id]) }}">{{ $product->title }}</a></td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->pub_date }}</td>
      <tr/>
    </tbody>
  @endforeach
</table>

{{ $products->links() }}

@endsection
