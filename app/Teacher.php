<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'age', 'experience', 'aadhar_id', 'dob', 'gender', 'address',
        
    ];

    public function StudentClass()
    {
        return $this->hasMany('App\StudentClass');
    }
    public function Student()
    {
        return $this->hasMany('App\Student');
    }
}
