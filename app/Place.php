<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['title', 'type_id'];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function updatePlace(Array $data) {
        return $this->update($data);
    }
}
