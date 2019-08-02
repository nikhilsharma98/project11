<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherStudentClass extends Model
{
    //
    protected $fillable = [
        'teacher_id', 'student_class_id'
        
    ];

    
    public function studentClass()
    {
        return $this->belongsTo('App\StudentClass');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    

  

}
