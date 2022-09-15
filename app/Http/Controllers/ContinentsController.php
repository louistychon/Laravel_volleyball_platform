<?php

namespace App\Http\Controllers;

use App\Models\Continents;
use App\Http\Requests\StoreContinentsRequest;
use App\Http\Requests\UpdateContinentsRequest;

class ContinentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreContinentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContinentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Continents  $continents
     * @return \Illuminate\Http\Response
     */
    public function show(Continents $continents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Continents  $continents
     * @return \Illuminate\Http\Response
     */
    public function edit(Continents $continents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContinentsRequest  $request
     * @param  \App\Models\Continents  $continents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContinentsRequest $request, Continents $continents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Continents  $continents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Continents $continents)
    {
        //
    }
}
