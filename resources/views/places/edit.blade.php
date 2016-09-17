@extends('layouts.app')

@section('content')
    <h1>Edit the Place</h1>

    <form method="post" action="/places/{{ $place->id }}/update">
        {{ method_field('patch') }}

        <input type="text" name="title" value="{{ $place->title }}">

        <select class="" name="type_id">
            @foreach( $types as $type )
                <option @if ($place->type_id == $type->id) {{ "selected" }} @endif value="{{ $type->id }}"> {{ $type->title }} </option>
            @endforeach
        </select>

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
