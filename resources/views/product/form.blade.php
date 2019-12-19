@extends('layouts.master')

@section('header')
  <h3>Product toevoegen</h3>
@endsection

@section('content')
  <form action="{{ route('store_products') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">Titel:</label>
      <br>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="">Description:</label>
      <br>
      <textarea type="text" class="form-control" name="description"></textarea
    </div>
    <div class="form-group">
      <label for="">Price:</label>
      <br>
      <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
      <label for="">Publicationdate:</label>
      <br>
      <input type="text" class="form-control" name="pub_date">
    </div>
    <button class="submit_button" type="submit" name="submit_button">Submit</button>
  </form>
@endsection
