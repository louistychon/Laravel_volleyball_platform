<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Equipes;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'roles_id' => 'required',
        ]);


        $photo = new Photo();
        Storage::put('public/img/', $request->file('img'));
        $photo->src = $request->file('img')->hashName();
        $photo->save();

        $store = new Joueur();
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->telephone = $request->telephone;
        $store->genre = $request->genre;
        $store->email = $request->email;
        $store->pays = $request->pays;
        $store->photos_id = $photo->id;
        $store->equipes_id = $request->equipes_id;
        $store->roles_id = $request->roles_id;
        $store->save();
        return redirect("/joueurs/create")->with('success', 'Joueur correctement créé ! félicitations');
    }


    public function show($id)
    {
        $allequipes = Equipes::all();
        $show = Joueur::find($id);
        $roles = Role::all();
        return view('pages.joueur.show', compact('show', 'roles', 'allequipes'));
    }

    public function update(Request $request, $id)
    {
        $update = Joueur::find($id);
        $photo = Photo::find($update->photos_id);
        if ($request->file('img') != null) {
            Storage::delete('public/img/', $photo->src);
            Storage::put('public/img/', $request->file('img'));
            $photo->src = $request->file('img')->hashName();
            $photo->save();
        }

        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->age = $request->age;
        $update->telephone = $request->telephone;
        $update->email = $request->email;
        $update->genre = $request->genre;
        $update->pays = $request->pays;
        $update->equipes_id = $request->equipes_id;
        $update->photos_id = $photo->id;
        $update->roles_id = $request->roles_id;
        $update->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $todel = Joueur::find($id);
        Storage::delete('public/img/' . $todel->photo->src);
        $todel->photo()->delete();
        $todel->delete();
        return redirect()->back();
    }
}
