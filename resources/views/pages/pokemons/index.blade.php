<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
@extends('layouts.index')
@section('content')
<div class="container my-5  ">
<table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr class=" text-light ">
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Genre</th>
        <th>Pays de Joueur</th>
        <th>Role</th>
        <th>Photo</th>
        <th>Equipe</th>
    </tr>
 </thead>
 <tbody>
    @foreach ($joueurs as $joueur )

    <tr class="text-light" >
        <td>{{$joueur->nom}}</td>
        <td>{{$joueur->prenom}}</td>
        <td>{{$joueur->age}}</td>
        <td>{{$joueur->telephone}}</td>
        <td>{{$joueur->email}}</td>
        <td>{{$joueur->genre}}</td>
        <td>{{$joueur->pays}}</td>
        <td>{{$joueur->role->role}}</td>
        <td width="10%">
        <img width="100%" class="rounded-pill" src="{{asset('storage/img/'.$joueur->photo->photo)}}" alt="">
        </td>
        <td>{{$joueur->equipe->nomdeclub}}</td>
    </tr>
    @endforeach
 </tbody>
</table>
</div>
</div>
@endsection
