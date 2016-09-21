@extends('layouts.app')

@section('content')
    <h1>{{ $city->title }}</h1>

    <h2>Available places</h2>

    @foreach ($city->place as $place)
        <li>
            <a href="/places/{{ $place->id }}"> {{ $place->title }} </a>
        </li>
    @endforeach


    @if($user && $user->isAdmin())

        <form method="post" action="/cities/{{ $city->id }}/places">
            <input type="text" name="title" value="{{ old('title')}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" name="button">Add place</button>
        </form>

        @if(count($errors))
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @endif

    @endif

@stop()
