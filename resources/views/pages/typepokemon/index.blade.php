<div style="background-image:url(img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
@extends('layouts.index')
@section('content')
<div class="container my-5">
<div class="row   "  >
    @foreach ($typepokemons as $type )
    <div class="col-sm-6 text-center ">
      <div class="card  rounded-pill w-50 m-auto " >
        <div class="card-body opacity-25 w-100 p-5  m-auto bg-info  rounded-pill ">
          <p class="card-text">ID : {{$type->id}}</p>
          <p>Type : {{$type->type}}</p>

          <a href="/showtype/{{$type->id}}" class="">
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
