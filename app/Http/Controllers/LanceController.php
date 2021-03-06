<?php

namespace App\Http\Controllers;

use App\Models\Lance;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Produtos;

class LanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lances = Lance::all();

        return view('Lance.showAllLance', ['lances'=>$lances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $lance = new Lance();
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
     * @param  \App\Models\Lance  $lance
     * @return \Illuminate\Http\Response
     */
    public function show(Lance $lance)
    {
        return view('Lance.showLance', ['lance' =>$lance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lance  $lance
     * @return \Illuminate\Http\Response
     */
    public function edit(Lance $lance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lance  $lance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lance $lance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lance  $lance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lance $lance)
    {
        //
    }
}
