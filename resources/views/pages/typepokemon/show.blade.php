<div class="h-100"
    style="background-image:url(/img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    @extends('layouts.index')
    @section('content')
        <div class="container my-5">
            {{-- <table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr>
        <th>Nom de l'équipe</th>
        <th>Ville</th>
        <th>Nombre de joueurs sur/maximum de place </th>
        <th>Show les joueurs de cet equipe</th>
    </tr>
 </thead>
 <tbody>

    <tr>
        <td>{{$equipes->nomdeclub}}</td>
        <td>{{$equipes->ville}}</td>
        <td>{{$equipes->maxdejoueurparrole}}</td>
        <td>
            <a href="/showjoueur/{{$equipes->id}}">
                <button class="btn btn-outline-info">Show</button>
            </a>
        </td>
    </tr>
 </tbody>
</table> --}}
            <div class="row   ">
                <div class="col-sm-6 text-center ">
                    <div class="card  rounded-pill w-50 m-auto ">
                        <div class="card-body opacity-25 w-100 p-5  m-auto bg-info  rounded-pill ">
                            {{-- <h5 class="card-title">Nom De Club : {{$equipes->nomdeclub}}</h5> --}}
                            <p class="card-text">ID : {{ $typepokemons->id }}</p>
                            <p>Type : {{ $typepokemons->type }}</p>
                            <a href="/edittype/{{ $typepokemons->id }}" class="">
                                <button class="btn btn-outline-light">Edit type</button>
                            </a>
                            <div class="pt-2">
                                <form action="/{{$typepokemons->id}}/deletetype" method="post" enctype="multipart/form">
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
