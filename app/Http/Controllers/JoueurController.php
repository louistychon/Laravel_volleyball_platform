<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\Equipes;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;

class JoueurController extends Controller
{

    public function index()
    {
        $alljoueurs = Joueur::all();
        return view('pages.joueur.index', compact('alljoueurs'));
    }

    public function create()
    {
        $roles = Role::all();
        $photos = Photo::all();
        $equipes = Equipes::all();
        return view('pages.joueur.create', compact('photos', 'roles', 'equipes'));
    }

    public function store(Request $request)
    {
        $store = new Joueur();
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->telephone = $request->telephone;
        $store->genre = $request->genre;
        $store->email = $request->email;
        $store->pays = $request->pays;
        $store->photos_id = $request->photos_id;
        $store->equipes_id = $request->equipes_id;
        $store->roles_id = $request->roles_id;
        $store->save();
        return redirect()->back();
    }


    public function show($id)
    {
        $show = Joueur::find($id);
        return view('pages.joueur.show', compact('show'));
    }

    public function edit(Joueur $joueur)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $update = Joueur::find($id);
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->age = $request->age;
        $update->telephone = $request->telephone;
        $update->email = $request->email;
        $update->genre = $request->genre;
        $update->pays = $request->pays;
        $update->photos_id = $request->photos_id;
        $update->roles_id = $request->roles_id;
        $update->save();
        return redirect()->back();
    }

    public function destroy(Joueur $joueur)
    {
        //
    }
}
