<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\City;

class PlacesController extends Controller
{
    public function index() {
        $places = Place::all();

        return view('places.index', compact('places'));
    }

    public function show(Place $place) {
        return view('places.show', compact('place'));
    }

    public function store(Request $request, City $city) {
        $place = new Place;

        $place->title = $request->title;
        $place->city_id = $city->id;
        $place->type_id = $request->type_id;

        $city->addPlace($place);

        return back();
    }
}
