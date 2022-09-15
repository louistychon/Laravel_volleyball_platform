<?php

use App\Http\Controllers\EquipesController;
use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;


//equipes

Route::controller(EquipesController::class)->group(function () {
    Route::get('/equipes', 'index')->name("equipes");
    Route::get('/equipes/create', 'create')->name("equipescreate");
    Route::post('/equipes/create', 'store');
    Route::get('/equipes/{id}/show', 'show');
    Route::put('/equipes/{id}/update', 'update');
});

//joueurs

Route::controller(JoueurController::class)->group(function () {
    Route::get('/joueurs', 'index')->name("joueurs");
    Route::get('/joueurs/create', 'create')->name("joueurscreate");
    Route::post('/joueurs/create', 'store');
    Route::get('/joueurs/{id}/show', 'show');
    Route::put('/joueurs/{id}/update', 'update');
});
