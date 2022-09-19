<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
@extends('layouts.index')
@section('content')
{{-- <div class="container my-5  ">
<table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr class="  ">
        <th>Name</th>
        <th>type_id</th>
        <th>image</th>
        <th>Niveau</th>

    </tr>
 </thead>
 <tbody>
    @foreach ($pokemons as $pokemon )

    <tr class="" >
        <td>{{$pokemon->name}}</td>
        <td>{{$pokemon->typepokemon_id}}</td>
        <td width="10%">
            <img width="100%" class="rounded-pill" src="{{asset('storage/img/'.$pokemon->img)}}" alt="">
            </td>
        <td>{{$pokemon->niveau}}</td>
            <td>
                <a href="/show/{{$pokemon->id}}" class="">
                    <button class="btn btn-outline-info">Show</button>
                  </a>
            </td>
    </tr>
    @endforeach
 </tbody>
</table> --}}
<div class="container my-5">
    <div class="row   "  >
        @foreach ($pokemons as $pokemon )
        <div class="col-sm-6 text-center ">
          <div class="card  rounded-pill w-50 m-auto " >
            <div class="card-body opacity-25 w-100 p-5  m-auto bg-info  rounded-pill ">
              <p class="card-text">Name: {{$pokemon->name}}</p>
              <p>Type_ID: {{$pokemon->id}}</p>
              <p width="10%">
                <img width="100%" class="rounded-pill" src="{{asset('storage/img/'.$pokemon->img)}}" alt="">
              </p>
              <p>Niveau : {{$pokemon->niveau}}</p>

              <a href="/showpok/{{$pokemon->id}}" class="">
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
