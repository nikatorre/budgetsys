<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incurred extends Model
{
    public function saro () {
        return $this->belongsTo('App\Saro');
    }
}
