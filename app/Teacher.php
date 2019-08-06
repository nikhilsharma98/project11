<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Teacher extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'age', 'experience', 'aadhar_id', 'dob', 'gender', 'address', 'student_class_id'
        
    ];
    
    public function studentClass()
    {
        return $this->hasMany('App\StudentClass');
    }
    // public function student()
    // { 
    //     return $this->hasMany('App\Student');
    // } 
    public function works()
    {
        return $this->belongsTo('App\Work');
    }
    public function teacherStudentclass()
    {
        return $this->hasMany('App\TeacherStudentClass');
    }
}




Work Report
Project: project11

Task1: assign the fees on classes.
Status: Done.

=> sir I have push my code on github !
