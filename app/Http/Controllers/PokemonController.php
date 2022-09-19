<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use App\Models\Typepokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $pokemons = Pokemon::all();
        $typepokemons = Typepokemon::all();
        return view( 'pages.pokemons.index', compact( 'pokemons', 'typepokemons' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $typepokemons = Typepokemon::all();
        return view( 'pages.pokemons.create', compact( 'typepokemons' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StorePokemonRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $request->validate( [
            'name' => 'required|min:1,|max:20',
            // 'typepokemon_id' => 'required',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'niveau' => 'required|numeric|min:1, |max:100',

        ],
        [
            'A_nom.required' => ' Faut min 1 et max 20 caractères',
            // 'typepokemon_id.required' => ' Faut max 300 caractères',
            'img.required' => 'extentions accepté jpg,png,jpeg,gif,svg, qualité 2048, min_width=100,min_height=100,max_width=1000,max_height=1000',
            'niveau.required' => ' Entrez des chiffres entre 1 et 100'
        ] );

        $pokemons = new Pokemon;
        $pokemons->name = $request->name;

        $pokemons->typepokemon_id = $request->typepokemon_id;

        Storage ::put( 'public/img/', $request->file( 'img' ) );
        $pokemons->img = $request->file( 'img' )->hashName();

        $pokemons->niveau = $request->niveau;

        $pokemons->save();
        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Pokemon  $pokemon
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $pokemons = Pokemon::find( $id );
        return view( 'pages.pokemons.show', compact( 'pokemons' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Pokemon  $pokemon
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $pokemons = Pokemon::find( $id );
        $typepokemons = Typepokemon::all();
        $typeid = Typepokemon::find( $id );
        return view( 'pages.pokemons.edit', compact( 'pokemons', 'typepokemons', 'typeid' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdatePokemonRequest  $request
    * @param  \App\Models\Pokemon  $pokemon
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $request->validate( [
            'name' => 'required|min:1,|max:20',
            // 'typepokemon_id' => 'required',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'niveau' => 'required|numeric|min:1, |max:100',

        ],
        [
            'A_nom.required' => ' Faut min 1 et max 20 caractères',
            // 'typepokemon_id.required' => ' Faut max 300 caractères',
            'img.required' => 'extentions accepté jpg,png,jpeg,gif,svg, qualité 2048, min_width=100,min_height=100,max_width=1000,max_height=1000',
            'niveau.required' => ' Entrez des chiffres entre 1 et 100'
        ] );
        $pokemons = Pokemon::find( $id );
        $pokemons->name = $request->name;
        $typepokemons = Typepokemon::find( $id );
        $pokemons->typepokemon_id = $typepokemons->id;
        $typepokemons->save();

        if ( $request->file( 'img' ) != null ) {
            Storage::delete( 'public/img/'.$pokemons->img );
            Storage ::put( 'public/img/', $request->file( 'img' ) );
            $pokemons->img = $request->file( 'img' )->hashName();
            $pokemons->save();
        }

        $pokemons->niveau = $request->niveau;

        $pokemons->save();
        return redirect()->back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Pokemon  $pokemon
    * @return \Illuminate\Http\Response
    */

    public function destroy( Pokemon $pokemon, $id ) {
        $pokemons = Pokemon::find( $id );
        // $pokemons->typepokemon()->delete();
        Storage::delete( 'public/img/'.$pokemons->img );
        $pokemons->delete();

        return redirect( '/' );
    }
}
