@extends('layouts.app')

@section('content')
    @if(session()->has('status_message'))
        <p class="status status--{{ session()->get('status_level') }}">
            {{ session()->get('status_message') }}
        </p>
    @endif

    You're logged in.
@stop()
