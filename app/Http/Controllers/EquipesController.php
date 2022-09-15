<?php

namespace App\Http\Controllers;

use App\Models\Equipes;
use App\Http\Requests\StoreEquipesRequest;
use App\Http\Requests\UpdateEquipesRequest;
use App\Models\Continents;
use App\Models\Joueur;
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


    public function show($id)
    {
        $show = Equipes::find($id);
        $joueurs = Joueur::all()->where('equipes_id', '=', $show->id);
        return view('pages.equipe.show', compact('show', 'joueurs'));
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, $id)
    {
        $update = Equipes::find($id);
        $update->nom = $request->nom;
        $update->ville = $request->ville;
        $update->pays = $request->pays;
        $update->continents_id = $request->continents_id;
        $update->save();
        return redirect()->back();
    }

    public function destroy()
    {
        //
    }
}
