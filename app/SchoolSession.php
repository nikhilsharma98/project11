<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolSession extends Model
{
    //
    protected $fillable = [
        'session_year',
        
    ];

    public function student_class_students()
    {
        return $this->hasMany('App\StudentClassStudent');
    }
}

