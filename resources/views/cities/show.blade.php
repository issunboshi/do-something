@extends('layout')

@section('content')
    <h1>{{ $city->title }}</h1>

    <h2>Available places</h2>

    <ul>
    @foreach( $city->place as $place )
        <li>
            <a href="/places/{{ $place->id }}"> {{ $place->title }} </a> - <a href="/types/{{ $place->type->id }}"> {{ $place->type->title }} </a>
        </li>
    @endforeach
    </ul>

@stop()
