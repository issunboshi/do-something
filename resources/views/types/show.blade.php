@extends('layout')

@section('content')
    <h1>{{ $type->title }}</h1>

    <h2>Places tagged {{ $type->title }}</h2>
    @foreach( $type->place as $place )
        {{ $place->title }}
    @endforeach

@stop()
