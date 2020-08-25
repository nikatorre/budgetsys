<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saro extends Model
{
    public function ppa () {
        return $this->belongsTo('App\Ppa');
    }

    public function saro_rec () {
        return $this->hasMany('App\SaroRec');
    }

    public function incurred () {
        return $this->hasMany('App\Incurred');
    }

    public function user () {
        return $this->belongsTo('App\User');
    }
}
