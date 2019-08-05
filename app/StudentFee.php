<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    //
    protected $fillable = [
        'class_fees', 'student_class_id'
        
    ];


    public function studentClass()
    {
        return $this->belongsTo('App\StudentClass');
    }

    

}
