<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identification_type extends Model
{
    protected $table = 'identification_type';

    protected $fillable = ['name', 'abbreviation'];

    public function identifications()
    {
    	return $this->hasMany('App\Identification', 'identification_type_id');
    }
}
