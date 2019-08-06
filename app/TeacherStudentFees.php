<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherStudentFees extends Model
{
    //
    protected $fillable = [
        'student_fee_id', 'student_class_id'
        
    ];
}
