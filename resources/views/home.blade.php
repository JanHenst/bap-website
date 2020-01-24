@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Most recent blogs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container-lg">
                            @foreach($blogs as $blog)
                                <hr>
                                <h5> {{ $blog->title }} </h5>
                                <p class="blogDesc"> {{ $blog->description }} </p>
                                <a class="blogRead" href="{{ route('blog.details', ['id' => $blog->id]) }}">Continue reading</a>
                                <p class="blogDate"> {{$blog->pub_date}} </p>
                            @endforeach
                            <div/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
