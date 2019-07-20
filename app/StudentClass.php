<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'section'
    ];

    public function students()
    {
        return $this->belongsTo('App\StudentClassStudent');
    }
    public function student_class_students()
    {
        return $this->belongsToMany('App\StudentClassStudent');
    }
    public function works()
    {
        return $this->hasMany('App\Work');
    }
    public function Teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

}
