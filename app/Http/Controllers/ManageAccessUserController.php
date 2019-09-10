<?php

namespace App\Http\Controllers;

use App\ManageAccessUser;
use Illuminate\Http\Request;
use App\Stock;
use App\Unit;

class ManageAccessUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        $units = Unit::all();

     
        return view('manageAccessUser')->with([ 'stocks' => $stocks, 'units' => $units ]); 
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
     * @param  \App\ManageAccessUser  $manageAccessUser
     * @return \Illuminate\Http\Response
     */
    public function show(ManageAccessUser $manageAccessUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManageAccessUser  $manageAccessUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageAccessUser $manageAccessUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManageAccessUser  $manageAccessUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageAccessUser $manageAccessUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManageAccessUser  $manageAccessUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageAccessUser $manageAccessUser)
    {
        //
    }
}
