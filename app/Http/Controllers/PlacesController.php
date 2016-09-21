<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\City;

class PlacesController extends Controller
{

    public function __construct() {
        $this->middleware('admin', ['only' => ['edit']]);
    }

    public function index() {
        $places = Place::all();

        return view('places.index', compact('places'));
    }

    public function show(Request $request, Place $place) {
        $user = $request->user();

        return view('places.show', compact('place', 'user'));
    }

    public function store(Request $request, City $city) {

        $this->validate($request, [
            'title' => 'required'
        ]);

        $place = new Place;

        $place->title = $request->title;
        $place->city_id = $city->id;

        $city->addPlace($place);

        return back();
    }

    public function edit(Place $place) {
        return view('places.edit', compact('place'));
    }

    public function update(Request $request, Place $place) {
        $place->updatePlace($request->all());

        return back();
    }
}
