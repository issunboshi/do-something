@extends('layouts.app')

@section('content')
    <h1>Edit the Place</h1>

    <form method="post" action="/places/{{ $place->id }}/update">
        {{ method_field('patch') }}

        <input type="text" name="title" value="{{ $place->title }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" name="button">Edit place</button>
    </form>

    @if(count($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif
@stop()
