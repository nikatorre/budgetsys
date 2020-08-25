<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uacs extends Model
{
    public function saro_rec () {
        return $this->hasMany('App\SaroRec');
    }

}
