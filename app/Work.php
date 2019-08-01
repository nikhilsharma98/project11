<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'student_class_id'
    ];
    
  

    public function StudentClass()
    {
        return $this->belongsTo('App\StudentClass');
    }
    // public function student_class()
    // {
    //     return $this->belongsTo('App\StudentClass');
    // }

    // public function student_class_students()
    // {
    //     return $this->belongsTO('App\StudentClassStudent');
    // }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function teacher()
    {
        return $this->hasMany('App\Teacher');
    }
    
}
