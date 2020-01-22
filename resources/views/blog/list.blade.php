@extends('layouts.app')

@section('header')
<h2>Alle Blogs</h2>
@endsection

@section('content')
<div class="container-lg">
  @foreach($blogs as $blog)
  <hr>
  <h5> {{ $blog->title }} </h5>
    <p class="blogDesc"> {{ $blog->description }} </p>
    <a class="blogRead" href="{{ route('blog.details', ['id' => $blog->id]) }}">Continue reading</a>
    <p class="blogDate"> {{$blog->pub_date}} </p>
  @endforeach
<div/>

{{ $blogs->links() }}

@endsection
