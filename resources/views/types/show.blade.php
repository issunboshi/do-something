@extends('layouts.app')

@section('content')
    <h1>{{ $type->title }}</h1>

    <h2>Places tagged {{ $type->title }}</h2>

    <ul>
    @foreach( $type->place as $place )
        <li>
            <a href="/places/{{ $place->id }}"> {{ $place->title }} </a>
        </li>
    @endforeach
    </ul>

@stop()
