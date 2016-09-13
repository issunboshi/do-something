@extends('layout')

@section('content')
    <h1>All types</h1>

    <ul>
    @foreach ($types as $type)
        <li>
            {{ $type->title }}
        </li>
    @endforeach
    </ul>

@stop()
