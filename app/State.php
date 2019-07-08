<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function students()
    {
        return $this->hasMany('App\Student');
    }
    public function countaries()
    {
        return $this->belongsTo('App\Countary');
    }
    public function schools()
    {
        return $this->hasMany('App\school');
    }
}
