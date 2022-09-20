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
        $allplayersCount = []; //table that counts the number of players per team


        foreach ($allequipes as $equipe){
            $player = Joueur::where('equipes_id', '=', $equipe->id)->get();
            $playerCount = $player->count();
            array_push($allplayersCount, $playerCount);
        }

        $quatrejoueurssansequipe = Joueur::where('equipes_id', '=', null)->take(4)->get();
        $quatrejoueursavecequipe = Joueur::where('equipes_id', '!=', null)->take(4)->get();
        $allequipes_europe = Equipes::where('continents_id', '=', 4)->get();
        $allequipes_hors_europe = Equipes::where('continents_id', '!=', 4)->get();
        $cinq_joueuses_random = Joueur::where('genre', '=', 1)->where('equipes_id', '!=', null)->take(5)->get();
        $cinq_joueurs_random = Joueur::where('genre', '=', 0)->where('equipes_id', '!=', null)->take(5)->get();
        return view('pages.home', compact('allequipes', 'alljoueurs', 'quatrejoueurssansequipe', 'quatrejoueursavecequipe', 'allequipes_europe', 'allequipes_hors_europe', 'cinq_joueuses_random', 'cinq_joueurs_random', 'allplayersCount'));
    }
}
