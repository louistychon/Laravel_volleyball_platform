<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EquipesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(EquipesController::class)->group(function () {
    Route::get('/equipes', 'index')->name("equipes");
    Route::get('/equipes/create', 'create')->name("equipescreate");
    Route::post('/equipes/create', 'store');
});
