<div class="h-100"
    style="background-image:url(/img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    @extends('layouts.index')
    @section('content')
        <div class="container my-5">
            <div class="row   ">
                <div class="col-sm-6 text-center ">
                    <div class="card  rounded-pill w-50 m-auto ">
                        <div class="card-body opacity-25 w-100 p-5  m-auto bg-info  rounded-pill ">
                            <p class="card-text">Name : {{ $pokemons->name }}</p>
                            <p>Type_id : {{ $pokemons->typepokemon_id }}</p>
                            <p width="10%">
                                <img width="100%" class="rounded-pill" src="{{asset('storage/img/'.$pokemons->img)}}" alt="">
                                </p>
                            <p>Niveau : {{ $pokemons->niveau }}</p>

                            <a href="/editpok/{{ $pokemons->id }}" class="">
                                <button class="btn btn-outline-light">Edit pokemon</button>
                            </a>
                            <div class="pt-2">
                                <form action="/{{$pokemons->id}}/deletepok" method="post" enctype="multipart/form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
