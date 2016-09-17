<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\City;
use App\Type;

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

        $this->validate($request, [
            'title' => 'required'
        ]);

        $place = new Place;

        $place->title = $request->title;
        $place->city_id = $city->id;
        $place->type_id = $request->type_id;

        $city->addPlace($place);

        return back();
    }

    public function edit(Place $place) {
        $types = Type::all();

        return view('places.edit', compact('place', 'types'));
    }

    public function update(Request $request, Place $place) {
        $place->updatePlace($request->all());

        return back();
    }
}
