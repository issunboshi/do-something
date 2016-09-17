<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    public function user () {
        return $this->belongsTo(User::$user);
    }
}
