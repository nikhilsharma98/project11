<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable = [
        'month', 'description', 'student_id', 'student_feedback_id', 'user_id',
        
    ];
    

    protected $table = "feedbacks";

   
  
    public function Student()
    {
        return $this->belongsTo('App\Student');
    }

}
