@extends('layout')

@section('content')
    <h1>All places</h1>

    <ul>
    @foreach ($places as $place)
        <li>
            {{ $place->title }}
        </li>
    @endforeach
    </ul>

@stop()
