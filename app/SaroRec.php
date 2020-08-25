<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaroRec extends Model
{
    public function uacs () {
        return $this->belongsTo('App\Uacs');
    }
    public function saro () {
        return $this->belongsTo('App\Saro');
    }
}
