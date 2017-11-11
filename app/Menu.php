<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

	protected $fillable = ['name', 'slug', 'parent', 'order', 'enabled'];

    // 
    public function items()
    {
        return $this->hasMany('App\MenuItem', 'menu_id');
    }

    public function getByName($name)
    {
        return Menu::where('name', '=', $name)->first();
    }

    public static function display($name)
    {
        $menu = new Menu();

        return $menu->getByName($name);
    }
}
