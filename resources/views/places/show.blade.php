@extends('layouts.app')

@section('content')
    <h1>{{ $place->title }}</h1>
    <p>
        In <a href="/cities/{{ $place->city->id }}"> {{ $place->city->title }} </a>
    </p>
    <p>
        <a href="/places/{{ $place->id }}/edit"> Edit this place </a>
    </p>
@stop()
