<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use App\Address;
use App\Headquarter;

class HeadquarterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headquarters = Headquarter::orderBy('id', 'ASC')->paginate(10);

        return View('institution.partials.headquarter.index')
                ->with('item', ['item_sidebar'=>'headquarter'])
                ->with('headquarters', $headquarters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cities = City::orderBy('name', 'ASC')->pluck('name', 'id');

        return View('institution.partials.headquarter.create')
                ->with('item', ['item_sidebar'=>'headquarter'])
                ->with('cities', $cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $address = new Address($request->all());
        $address->save();

        $headquarter = new Headquarter($request->all());
        $headquarter->address_id = $address->id;
        $headquarter->save();
        
        return redirect()->route('headquarter.index');
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
        $headquarter = Headquarter::findOrFail($id);

        $cities = City::orderBy('name', 'ASC')->pluck('name', 'id');

        return View('institution.partials.headquarter.edit')
                ->with('item', ['item_sidebar'=>'headquarter'])
                ->with('cities', $cities)
                ->with('headquarter', $headquarter);
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
        // Search models
        $headquarter = Headquarter::findOrFail($id);
        $address = Address::findOrFail($headquarter->address_id);

        // Fill fields
        $address->fill($request->all());
        $headquarter->fill($request->all());

        // Update models
        $address->save();
        $headquarter->save();

        return redirect()->route('headquarter.index');
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
}
