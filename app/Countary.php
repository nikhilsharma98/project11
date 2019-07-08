<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countary extends Model
{
    public function students()
    {
        return $this->hasMany('App\Student');
    }
    public function states()
    {
        return $this->hasMany('App\State');
    }
    public function schools()
    {
        return $this->hasMany('App\school');
    }
}
