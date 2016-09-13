<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use App\Type;

class CitiesController extends Controller
{
    public function index() {
        $cities = City::all();

        return view('cities.index', compact('cities', 'types'));
    }

    public function show(City $city) {
        $types = Type::all();

        return view('cities.show', compact('city', 'types'));
    }
}
