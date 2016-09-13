@extends('layout')

@section('content')
    <h1>{{ $place->title }}</h1>
    <p>
        A {{ $place->type->title }} in {{ $place->city->title }}
    </p>

@stop()
