<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TypepokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

//  Route typepokemon
Route::get( '/', [ TypepokemonController::class, 'index' ] )->name( 'type' );
Route::get( '/create', [ TypePokemonController::class, 'create' ] )->name( 'typecreate' );
Route::post( '/createtype', [ TypePokemonController::class, 'store' ] );
Route::get( '/showtype/{id}', [ TypePokemonController::class, 'show' ] );
Route::get( '/edittype/{id}', [ TypePokemonController::class, 'edit' ] );
Route::put( '/updatetype/{id}', [ TypePokemonController::class, 'update' ] );
Route::delete( '/{id}/deletetype', [ TypePokemonController::class, 'destroy' ] );
// End of route typepokemon

//  Route pokemon
Route::get( '/pokemon', [ PokemonController::class, 'index' ] )->name( 'pokemon' );
Route::get( '/createpok', [ PokemonController::class, 'create' ] )->name( 'pokemoncreate' );
Route::post( '/createpok', [ PokemonController::class, 'store' ] );
Route::get( '/showpok/{id}', [ PokemonController::class, 'show' ] );
Route::get( '/editpok/{id}', [ PokemonController::class, 'edit' ] );
Route::put( '/updatepok/{id}', [ PokemonController::class, 'update' ] );
Route::delete( '/{id}/deletepok', [ PokemonController::class, 'destroy' ] );
// End of route pokemon
