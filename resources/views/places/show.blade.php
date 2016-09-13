@extends('layout')

@section('content')
    <h1>{{ $place->title }}</h1>
    <p>
        A <a href="/types/{{ $place->type->id }}"> {{ $place->type->title }} </a> in <a href="/cities/{{ $place->city->id }}"> {{ $place->city->title }} </a>
    </p>
@stop()
