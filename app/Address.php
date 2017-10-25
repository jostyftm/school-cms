<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = 
    [
    	'address',
    	'neighborhood',
    	'id_city_address',
    	'phone',
    	'mobil',
    	'email'
    ];

    /**
     * Obtiene la relacion que hay entre identificacion y la sede
     */
    public function headquarter()
    {
        return $this->hasOne('App\Headquarter', 'address_id');
    }
	
	/**
     * Obtiene la relacion que hay entre identificacion y la Ciudad
     */
    public function city()
    {
        return $this->belongsTo('App\City', 'id_city_address');
    }

    public function employees()
    {
        return $this->hasMany('App\Employee', 'address_id');
    }
}
