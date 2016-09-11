<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function place() {
        return $this->hasMany(Place::class);
    }
}
