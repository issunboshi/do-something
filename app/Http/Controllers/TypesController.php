<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

class TypesController extends Controller
{
    public function index() {
        $types = Type::all();

        return view('types.index', compact('types'));
    }

    public function show(Type $type) {
        return view('types.show', compact('type'));
    }
}
