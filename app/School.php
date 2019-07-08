<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name', 'title', 'date_of_opening', 'address', 'city', 'state_id', 'countary_id',
        
    ];  



    public function students()
    {
        return $this->belongsTo('App\Student');
    }
    public function countaries()
    {
        return $this->hasMany('App\Countary');
    }
    public function state()
    {
        return $this->hasMany('App\State');
    }
}
