<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Headquarter;
use App\Category;
use App\Employee;
use App\Contract;
use App\Post;
use App\Page;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $institution = Auth::guard('web_institution')->user();

        $headquarters = Headquarter::all();
        $employees = Employee::all();  
        $contracts = Contract::all();
        $categories = Category::all();
        $posts = Post::all();
        $pages = Page::all();

        return View('institution.partials.home.index')
               ->with('item', ['item_sidebar'=>'home'])
               ->with('institution', $institution)
               ->with('headquarters', $headquarters)
               ->with('employees', $employees)
               ->with('contracts', $contracts)
               ->with('categories', $categories)
               ->with('posts', $posts)
               ->with('pages', $pages);
    }
}
