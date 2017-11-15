<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all()->first();

        return View('institution.partials.banner.index')
                ->with('item', ['item_sidebar'=>'appearance', 'subitem_sidebar'=>'banner'])
                ->with('banner', $banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('institution.partials.banner.create')
                ->with('item', ['item_sidebar'=>'appearance', 'subitem_sidebar'=>'banner']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            // 'name'  =>  'required',
            // 'description'   =>  'required',
            'image'     =>  'required'
        ], [
            // 'name.required' =>  'El nombre del banner es requerido',
            // 'description.required'  =>  'La descripción del banner es requerida',
            'image.required'    =>  'La imagen para el banner es requerida',

        ]);

        Banner::create($request->all());
        
        return redirect()->route('banner.index');
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
        $banner = Banner::findOrFail($id);

        // dd($banner);
        return View('institution.partials.banner.edit')
                ->with('item', ['item_sidebar'=>'appearance', 'subitem_sidebar'=>'banner'])
                ->with('banner', $banner);
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
        $banner = Banner::findOrFail($id);
        $banner->fill($request->all());
        $banner->save();

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banner.index');
    }
}
