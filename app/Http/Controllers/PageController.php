<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use Illuminate\Support\Str as Str;

use App\Page;
use App\Menu;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'ASC')->paginate(5);

        return View('institution.partials.page.index')
                ->with('item', ['item_sidebar'=>'pages'])
                ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::orderBy('id', 'ASC')->pluck('title', 'id');

        return View('institution.partials.page.create')
                ->with('item', ['item_sidebar'=>'pages'])
                ->with('pages', $pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $page = new Page($request->all());
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $menus = Menu::orderBy('id', 'ASC')->pluck('name', 'id');

        return View('institution.partials.page.edit')
                ->with('item', ['item_sidebar'=>'pages'])
                ->with('page', $page)
                ->with('menus',$menus);
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

        $page = Page::findOrFail($id);
        $page->fill($request->all());
        $page->slug = Str::slug($request->title);
        $page->save();

        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('page.index');
    }
}
