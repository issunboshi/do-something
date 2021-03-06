<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['title'];

    public function place() {
        return $this->hasMany(Place::class);
    }

    public function addPlace(Place $place) {
        return $this->place()->save($place);
    }
}
