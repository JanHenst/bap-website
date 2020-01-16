@extends('layouts.master')

@section('header')
<h2>{{ $bedrijf->name }}</h2>
@endsection

@section('content')

  {{ $bedrijf->address }}<br>
  {{ $bedrijf->zipcode }}<br>
  {{ $bedrijf->country }}<br>
  {{ $bedrijf->city }}<br>
  {{ $bedrijf->phone }}

  <p>
    {{ $bedrijf->description }}
  </p>
  <hr>
  <a class="back" href="{{ route('companies') }}">Terug naar alle bedrijven</a>
@endsection
