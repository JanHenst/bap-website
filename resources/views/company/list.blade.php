@extends('layouts.master')

@section('header')
<h2>Alle bedrijven</h2>
@endsection

@section('content')
<table class="bedrijven">
  <tr class="head">
    <td>Company name</td>
    <td>Address</td>
    <td>Zipcode</td>
    <td>City</td>
    <td>Country</td>
  </tr>
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
