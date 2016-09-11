@extends('layout')

@section('content')
    <h1>All cities</h1>

    @foreach ($cities as $city)
        {{ $city->title }}
    @endforeach
@stop()
