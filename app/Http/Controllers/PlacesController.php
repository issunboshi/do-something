<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;

class PlacesController extends Controller
{
    public function index() {
        $places = Place::all();

        return view('places.index', compact('places'));
    }

    public function show(Place $place) {
        return view('places.show', compact('place'));
    }
}
