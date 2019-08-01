<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolSession extends Model
{
    //
    protected $fillable = [
        'session_year',
        
    ];

    public function studentclassstudents()
    {
        return $this->hasMany('App\StudentClassStudent');
    }
}

