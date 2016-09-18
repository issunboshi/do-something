<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;

class CitiesController extends Controller
{
    public function index() {
        $cities = City::all();

        return view('cities.index', compact('cities'));
    }

    public function show(City $city) {

        return view('cities.show', compact('city'));
    }
}
