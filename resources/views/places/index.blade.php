@extends('layouts.app')

@section('content')
    <h1>All places</h1>

    <ul>
    @foreach ($places as $place)
        <li>
            <a href="/places/{{ $place->id }}"> {{ $place->title }} </a> - <a href="/cities/{{ $place->city->id }}"> {{ $place->city->title }} </a>
        </li>
    @endforeach
    </ul>

@stop()
