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
        'title', 'section', 'teacher_id'
    ];
    
    public function students()
    {
        return $this->belongsTo('App\StudentClassStudent');
    }
    public function studentClassstudents()
    {
        return $this->hasMany('App\StudentClassStudent');
    }
    public function works()
    {
        return $this->hasMany('App\Work');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    public function teacherStudentclass()
    {
        return $this->hasMany('App\TeacherStudentClass');
    }

}
