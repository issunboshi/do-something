@extends('layout')

@section('content')
    <h1>All cities</h1>

    <ul>
    @foreach ($cities as $city)
        <li>
            {{ $city->title }}
        </li>
    @endforeach
    </ul>
    
@stop()
