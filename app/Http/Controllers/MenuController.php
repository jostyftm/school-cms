<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\MenuItem;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('id', 'DESC')->paginate(5);

        return View('institution.partials.menu.index')
               ->with('item', ['item_sidebar'=>'appearance'])
               ->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('institution.partials.menu.create')
               ->with('item', ['item_sidebar'=>'appearance']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menu::create($request->all());

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function build($id)
    {

        // $item = MenuItem::findOrFail(2);

        // dd($item->items);

        $menu = Menu::findOrFail($id);
        $items = $menu->items->pluck('title', 'id');

        return View('institution.partials.menu.build')
               ->with('item', ['item_sidebar'=>'appearance'])
               ->with('menu', $menu)
               ->with('items', $menu->items)
               ->with('items_add', $items);
    }

    public function addItem(Request $request)
    {
        MenuItem::create($request->all());

        return redirect()->route('menu.build', $request->menu_id);
    }

    public function updateItem(Request $request, $id){

        if($request->ajax())
        {
            $item = MenuItem::findOrFail($id);
            $item->fill($request->all());
            $item->save();

            return response()->json($item);
        }
    }

    public function orderItem(Request $request, $id)
    {
        $menuItemOrder = json_decode($request->input('order'));

        $this->orderMenu($menuItemOrder, null);
    }

    private function orderMenu(array $menuItems, $parentId)
    {
        foreach ($menuItems as $index => $menuItem) {
            $item = MenuItem::findOrFail($menuItem->id);
            $item->order = $index + 1;
            $item->parent_id = $parentId;
            $item->save();

            if (isset($menuItem->children)) {
                $this->orderMenu($menuItem->children, $item->id);
            }
        }
    }

    public function findMenuItem(Request $request, $id)
    {
        if($request->ajax())
        {
            $item = MenuItem::findOrFail($id);

            return response()->json($item);
        }
    }
}
