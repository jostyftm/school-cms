<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    protected $table = 'identification';

    protected $fillable = [
    	'identification_number', 
    	'birthdate',
    	'identification_type_id',
    	'id_city_expedition',
    	'gender_id',
    ];

    public function employees()
    {
    	return $this->hasMany('App\Employee', 'identification_id');
    }

    public function identification_type()
    {
    	return $this->belongsTo('App\Identification_type', 'identification_type_id');
    }
}
