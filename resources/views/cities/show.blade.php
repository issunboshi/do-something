@extends('layout')

@section('content')
    <h1>{{ $city->title }}</h1>

    {{ $city->places }}
    {{-- @foreach($city->places as $place)
        {{ $place->title }}
    @endforeach --}}

@stop()
