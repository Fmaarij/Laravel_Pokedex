<div style="background-image:url(img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
@extends('layouts.index')
@section('content')


<div class="container my-5">
{{-- List group --}}
    {{-- <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            The current link item
        </a>
        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A
            disabled link item</a>
    </div> --}}

{{-- <table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr>
        <th>Nom de l'équipe</th>
        <th>Ville</th>
        <th>Nombre de joueurs sur/maximum de place </th>
        <th>Show</th>
    </tr>
 </thead>
 <tbody>
    @foreach ($equipes as $equipe ) --}}

    {{-- <tr> --}}
        {{-- {{dd($joueurs)}} --}}
        {{-- @if($joueurs->joueurs->equipe_id ==  $equipe->nomdeclub ) --}}
        {{-- <td>{{$equipe->nomdeclub}}</td>
        <td></td>
        <td>{{$equipe->maxdejoueurparrole}}</td>
        <td>
            <a href="/showequipe/{{$equipe->id}}">
                <button class="btn btn-outline-info">Show</button>
            </a>
        </td> --}}
        {{-- @endif --}}
    {{-- </tr>
    @endforeach
 </tbody>
</table> --}}
<div class="row   "  >
    @foreach ($typepokemons as $type )
    <div class="col-sm-6 text-center ">
      <div class="card  rounded-pill w-50 m-auto " >
        <div class="card-body opacity-25 w-100 p-5  m-auto bg-info  rounded-pill ">
          {{-- <h5 class="card-title">Nom De Club : {{$type->name}}</h5> --}}
          <p class="card-text">ID : {{$type->id}}</p>
          <p>Type : {{$type->type}}</p>
          <a href="/show/{{$type->id}}" class="">
            <button class="btn btn-outline-light">Show</button>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
@endsection
