@extends('layout')

@section('content')
    <h1>{{ $city->title }}</h1>

    <h2>Available places</h2>
    @foreach( $city->place as $place )
        {{ $place->title }}
    @endforeach

@stop()
