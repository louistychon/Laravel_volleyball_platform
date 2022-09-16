<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Equipes;
use App\Models\Joueur;

class HomeController extends Controller
{

    public function index()
    {
        $allequipes = Equipes::all();
        $alljoueurs = Joueur::all();
        $quatrejoueurssansequipe = Joueur::where('equipes_id', '=', null)->get();
        $quatrejoueursavecequipe = Joueur::where('equipes_id', '!=', null)->get();
        $allequipes_europe = Equipes::where('continents_id', '=', 4)->get();
        $allequipes_hors_europe = Equipes::where('continents_id', '!=', 4)->get();
        $cinq_joueuses_random = Joueur::where('genre', '=', 1)->where('equipes_id', '!=', null)->take(5)->get();
        $cinq_joueurs_random = Joueur::where('genre', '=', 0)->where('equipes_id', '!=', null)->take(5)->get();
        return view('pages.home', compact('allequipes', 'alljoueurs', 'quatrejoueurssansequipe', 'quatrejoueursavecequipe', 'allequipes_europe', 'allequipes_hors_europe', 'cinq_joueuses_random', 'cinq_joueurs_random'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeRequest  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
