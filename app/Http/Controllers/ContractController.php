<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContractRequest;
use Illuminate\Support\Str as Str;

use Carbon\Carbon;
use App\Contract;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::orderBy('id', 'DESC')->paginate(5);

        return View('institution.partials.contract.index')
                ->with('item', ['item_sidebar'=>'contracts'])
                ->with('contracts', $contracts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('institution.partials.contract.create')
                ->with('item', ['item_sidebar'=>'contracts']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractRequest $request)
    {
        $contract = new Contract($request->all());
        $contract->slug = Str::slug($request->name);
        $contract->save();

        return redirect()->route('contract.index');
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
        $contract = Contract::findOrFail($id);

        return View('institution.partials.contract.edit')
                ->with('item', ['item_sidebar'=>'contracts'])
                ->with('contract', $contract);
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
        $contract = Contract::findOrFail($id);
        $contract->fill($request->all());
        $contract->slug = Str::slug($request->name);
        $contract->save();

        return redirect()->route('contract.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contract = Contract::findOrFail($id);
        $contract->delete();

        return redirect()->route('contract.index');
    }

    public function showContracts()
    {
        $contracts = Contract::all();

        return View('contract.index')
                ->with('contracts', $contracts);
    }

    public function showContract($slug)
    {
        $contract = Contract::findBySlug($slug);

        return View('contract.show')
                ->with('contract', $contract);
    }
}
