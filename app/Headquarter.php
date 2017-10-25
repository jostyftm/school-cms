<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $table = 'headquarter';

    protected $fillable = [
    	'name',
    	'nit',
    	'institution_id',
    	'address_id',
        'avatar',
    ];

    /**
     * Obtiene la relacion que hay entre direccion y estudiante
     */
    public function address()
    {
        return $this->belongsTo('App\Address', 'address_id');
    }

    /**
     * Obtiene la relacion que hay entre la Institución y la sede
     */
    public function institution()
    {
        return $this->hasMany('App\Institution', 'institution_id');
    }
}
