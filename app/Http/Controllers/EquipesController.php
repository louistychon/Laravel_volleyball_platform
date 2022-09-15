<?php

namespace App\Http\Controllers;

use App\Models\Equipes;
use App\Http\Requests\StoreEquipesRequest;
use App\Http\Requests\UpdateEquipesRequest;
use App\Models\Continents;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    public function index()
    {
        $allequipes = Equipes::all();
        return view('pages.equipe.index', compact('allequipes'));
    }

    public function create()
    {
        $allcontinents = Continents::all();
        return view('pages.equipe.create', compact('allcontinents'));
    }

    public function store(Request $request)
    {
        $store = new Equipes();
        $store->nom = $request->nom;
        $store->ville = $request->ville;
        $store->pays = $request->pays;
        $store->continents_id = $request->continents_id;
        $store->save();
        return redirect()->back();
    }


    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
