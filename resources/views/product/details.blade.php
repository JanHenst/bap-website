@extends('layouts.app')

@section('header')
<h2>{{ $product->title }}</h2>
@endsection

@section('content')

  <h3>{{ $product->title }}</h3><br>
  {{ $product->description }}<br>
  {{ $product->price }}<br>
  {{ $product->pub_date }}<br>

  <hr>
  <a class="back" href="{{ route('product.list') }}">Terug naar alle producten</a>
@endsection
