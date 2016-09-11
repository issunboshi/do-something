<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function city() {
        return $this->belongsTo(City::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
