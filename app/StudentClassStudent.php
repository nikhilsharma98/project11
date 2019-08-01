<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClassStudent extends Model
{
    protected $fillable = [
        'student_class_id', 'student_id', 'school_session_id'
    ];

    public function studentClass()
    {   
        return $this->belongsTo('App\StudentClass');
    }
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
    public function schoolSession()
    {
        return $this->belongsTo('App\SchoolSession');
    }
    // public function guardian()
    // {
    //     return $this->belongsTo('App\Guardian');
    // }
    // public function StudentClass()
    // {
    //     return $this->belongsTo('App\StudentClass');
    // }
    // public function work()
    // {
    //     return $this->belongsTo('App\Work');
    // }
}

