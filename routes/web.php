<?php

use App\Http\Controllers\TypepokemonController;
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

//  Route typepokemon
Route::get( '/', [ TypepokemonController::class, 'index' ] )->name( 'home' );
Route::get( '/create', [ TypePokemonController::class, 'create' ] )->name( 'typecreate' );
Route::post( '/createtype', [ TypePokemonController::class, 'store' ] );
Route::get( '/show/{id}', [ TypePokemonController::class, 'show' ] );
Route::get( '/edit/{id}', [ TypePokemonController::class, 'edit' ] );
Route::put( '/update/{id}', [ TypePokemonController::class, 'update' ] );
Route::delete('/delete/{id}', [ TypePokemonController::class, 'destroy'] );
// End of route typepokemon
