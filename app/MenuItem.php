<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    //
    protected $fillable = ['title', 'url', 'target', 'parent_id', 'menu_id'];

    // 
    public function menu()
    {
    	return $this->belongsTo('App\Menu', 'menu_id');
    }

    public function items()
    {
    	return $this->hasMany('App\MenuItem', 'parent_id');
    }

    public function item()
    {
    	return $this->belongsTo('App\MenuItem', 'parent_id');
    }
}
