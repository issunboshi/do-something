@extends('layouts.app')

@section('content')
    <h1>All cities</h1>

    <ul>
    @foreach ($cities as $city)
        <li>
            <a href="/cities/{{ $city->id }}"> {{ $city->title }} </a>
        </li>
    @endforeach
    </ul>

@stop()
