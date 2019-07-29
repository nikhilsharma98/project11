<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherStudentClass extends Model
{
    //
    protected $fillable = [
        'teacher_id', 'student_class_id'
        
    ];


    // public function student_class()
    // {
    //     return $this->belongsToMany('App\StudentClass');
    // }

    // public function Teacher()
    // {
    //     return $this->belongsToMany('App\Teacher');
    // }


  

}
