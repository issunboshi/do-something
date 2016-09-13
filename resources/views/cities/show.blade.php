@extends('layout')

@section('content')
    <h1>{{ $city->title }}</h1>

    <h2>Available places</h2>

    <ul>
    @foreach( $city->place as $place )
        <li>
            <a href="/places/{{ $place->id }}"> {{ $place->title }} </a> - <a href="/types/{{ $place->type->id }}"> {{ $place->type->title }} </a>
        </li>
    @endforeach
    </ul>

    <form method="post" action="/cities/{{ $city->id }}/places">
        <input type="text" name="title" value="">

        <select class="" name="type_id">
            @foreach( $types as $type )
                <option value="{{ $type->id }}"> {{ $type->title }} </option>
            @endforeach
        </select>
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" name="button">Add place</button>
    </form>

@stop()
