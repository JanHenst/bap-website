@extends('layouts.app')

@section('header')
<h2>{{ $blog->title }}</h2>
@endsection

@section('content')

  <h3>{{ $blog->title }}</h3><br>
  <p>{{ $blog->description }}</p><br>
  <img style="width: 50vw" src="{{ asset('storage/' . $blog->image) }}" onerror="this.style.display='none'" /><br>
  <p>{{ $blog->pub_date }}</p><br>

  <hr>
  <a class="back" href="{{ route('blog.list') }}">Terug naar alle blogs</a>
@endsection
