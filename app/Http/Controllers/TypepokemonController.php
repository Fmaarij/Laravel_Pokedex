<?php

namespace App\Http\Controllers;

use App\Models\Typepokemon;
use App\Http\Requests\StoreTypepokemonRequest;
use App\Http\Requests\UpdateTypepokemonRequest;
use Illuminate\Http\Request;

class TypepokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typepokemons = Typepokemon::all();
        return view('pages.typepokemon.index', compact('typepokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.typepokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypepokemonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typepokemons=new Typepokemon;
        $typepokemons->type = $request->type;
        $typepokemons->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typepokemon  $typepokemon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typepokemons= Typepokemon::find($id);
        return view('pages.typepokemon.show',compact('typepokemons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typepokemon  $typepokemon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typepokemons= Typepokemon::find($id);
        return view('pages.typepokemon.edit',compact('typepokemons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypepokemonRequest  $request
     * @param  \App\Models\Typepokemon  $typepokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $typepokemons= Typepokemon::find($id);
        $typepokemons->type = $request->type;
        $typepokemons->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typepokemon  $typepokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $typepokemons = Typepokemon::find($id);
        $typepokemons->delete();
        return redirect('/');
    }
}
