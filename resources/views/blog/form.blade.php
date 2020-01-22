@extends('layouts.app')

@section('header')
  <h3>Blog maken</h3>
@endsection

@section('content')

  @if ($errors->any())
    <div class="alert">
      <p>Er zijn fouten, het formulier is niet verstuurd!</p>
    </div>
  @endif

  <form action="{{ route('store_blogs') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group first">
      <label for="">Titel:</label>
      <br>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
      @error('title')
        <div class="error-message">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="">Description:</label>
      <br>
      <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
      @error('description')
        <div class="error-message">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="">Publication date:</label>
      <br>
      <input type="text" class="form-control @error('pub_date') is-invalid @enderror" name="pub_date" value="{{ old('pub_date') }}">
      @error('pub_date')
        <div class="error-message">
          {{ $message }}
        </div>
      @enderror
    </div>
    <button class="submit_button" type="submit" name="submit_button">Submit</button>
  </form>
@endsection
