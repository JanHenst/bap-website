@extends('layouts.master')

@section('header')
<h2>Alle bedrijven</h2>
@endsection

@section('content')
<table class="bedrijven">
  @foreach($bedrijven as $bedrijf)
    <tr>
      <td><a href="{{ route('company', ['id' => $bedrijf->id]) }}">{{ $bedrijf->name }}</a></td>
      <td>{{ $bedrijf->address }}</td>
      <td>{{ $bedrijf->zipcode }}</td>
      <td>{{ $bedrijf->city }}</td>
      <td>{{ $bedrijf->country }}</td>
    <tr/>
  @endforeach
</table>
@endsection