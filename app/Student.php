<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
  
    // protected $table = 'tb_job';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'father_name', 'mother_name', 'aadhar_id', 'dob', 'doa', 'photo', 'gender', 'address', 'city', 'state_id', 'countary_id',
        //  'title', 'section',
    ];
    

    

    public function student_class()
    {
        return $this->hasMany('App\StudentClassStudent');
    }
    public function state()
    {
        return $this->belongsTo('App\State');
    }
    public function countary()
    {
        return $this->belongsTo('App\Countary');
    }
    public function schools()
    {
        return $this->hasMany('App\school');
    }
    public function student_class_students()
    {
        return $this->hasMany('App\StudentClassStudent');
    }
    public function guardians()
    {
        return $this->belongsTo('App\Guardians');
    }
    public function feedbacks()
    {
        return $this->belongsTo('App\Feedbacks');
    }

    public function works()
    {
        return $this->hasMany('App\Work');
    }
    public function Teacher()
    {
        return $this->hasMany('App\Teacher');
    }
    
}

