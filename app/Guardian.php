<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    //
    protected $fillable = [
        'father_name', 'father_image', 'father_occupation', 'mother_name', 'mother_image', 'mother_occupation', 'student_id',
        
    ];
    
    // public function students()
    // {
    //     return $this->belongsTo('App\Student', 'student_id');
    // }

    public function Student()
    {
        return $this->belongsTo('App\Student');
    }
    
}
