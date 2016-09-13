<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['title'];

    public function place() {
        return $this->hasMany(Place::class);
    }
}
