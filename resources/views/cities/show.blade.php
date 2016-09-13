@extends('layout')

@section('content')
    <h1>{{ $city->title }}</h1>

    <h2>Available places</h2>

    @foreach ($types as $type )
        <h2> <a href="/types/{{ $type->id }}"> {{ $type->title }} </a> </h2>

        <ul>
        @foreach ($type->place as $place)
            <li>
                <a href="/places/{{ $place->id }}"> {{ $place->title }} </a>
            </li>
        @endforeach
        </ul>
    @endforeach


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
