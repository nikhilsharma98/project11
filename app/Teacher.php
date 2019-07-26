<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'age', 'experience', 'aadhar_id', 'dob', 'gender', 'address', 'student_class_id'
        
    ];
    
    public function StudentClass()
    {
        return $this->belongsTo('App\StudentClass');
    }
    public function Student()
    {
        return $this->belongsTo('App\Student');
    }

    public function works()
    {
        return $this->belongsTo('App\Work');
    }
}
