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

    // 
    public function getChildren($data, $line)
    {
        $children = [];
        foreach ($data as $line1) {
            if ($line['id'] == $line1['parent']) {
                $children = array_merge($children, [ array_merge($line1, ['submenu' => $this->getChildren($data, $line1) ]) ]);
            }
        }
        return $children;
    }

    public function optionsMenu()
    {
        return $this->where('enabled', 1)
            // ->orderby('id')
            // ->orderby('order')
            ->orderby('parent')
            ->get()
            ->toArray();
    }
    
    public static function menus()
    {
        $menus = new Menu();
        $data = $menus->optionsMenu();
        $menuAll = [];
        foreach ($data as $line) {
            $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menus->menuAll = $menuAll;
    }
}
