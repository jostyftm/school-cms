<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'file', 'created_at'];

    public static function findBySlug($slug)
    {
    	$contract = new Contract();

    	return $contract::where('slug', '=', $slug)->first();
    }
}
