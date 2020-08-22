<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppa extends Model
{
    public function saro () {
        return $this->hasMany('App\Saro');
    }
}
