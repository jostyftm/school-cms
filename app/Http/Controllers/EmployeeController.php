<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Identification_type;
use App\City;
use App\Role;
use App\Gender;
use App\Identification;
use App\Address;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'ASC')->paginate(10);
        return View('institution.partials.employee.index')
                ->with('item', ['item_sidebar'=>'employee'])
                ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $identifications = Identification_type::orderBy('id', 'ASC')->pluck('name', 'id');
        $genders = Gender::orderBy('id', 'ASC')->pluck('gender', 'id');
        $cities = City::orderBy('id', 'ASC')->pluck('name', 'id');
        $roles = Role::orderBy('id', 'ASC')->pluck('name', 'id');

        return View('institution.partials.employee.create')
                ->with('item', ['item_sidebar'=>'employee'])
                ->with('identifications', $identifications)
                ->with('cities', $cities)
                ->with('roles', $roles);
                // ->with('genders', $genders)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $identification = new Identification($request->all());
        $address = new Address($request->all());

        // 
        $identification->save();
        $address->save();

        
        // 
        $employee = new Employee($request->all());
        $employee->address_id = $address->id;
        $employee->identification_id = $identification->id;
        $employee->save();

        return redirect()->route('employee.index');
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
}
