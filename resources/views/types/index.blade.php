@extends('layouts.app')

@section('content')
    <h1>All types</h1>

    <ul>
    @foreach ($types as $type)
        <li>
            <a href="/types/{{ $type->id }}"> {{ $type->title }} </a>
        </li>
    @endforeach
    </ul>

@stop()
