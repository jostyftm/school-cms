<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $fillable =
    [
    	'name',
    	'last_name',
    	'avatar',
    	'identification_id',
    	'address_id',
    	'role_id',
    ];

    public function identification()
    {
    	return $this->belongsTo('App\Identification', 'identification_id');
    }

    public function address()
    {
    	return $this->belongsTo('App\Address', 'address_id');
    }
}
