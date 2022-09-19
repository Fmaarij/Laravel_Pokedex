<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')

    @section('content')
        <div class="container my-5">

                <form action="/createpok" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row  ">
                        <div class="pb-3">
                            <input class="form-control " style="background: transparent;border:none;" type="text" name="name" placeholder="name">
                        </div>
                        <div class="pb-3">
                            {{-- <input class="form-control " style="background: transparent;border:none;"type="number" name="typepokemon_id" placeholder="eau"> --}}
                            <select name="typepokemon_id" id="">
                                @foreach ($typepokemons as $type )
                                <option value="{{$type->id}}">{{$type->type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pb-3">
                            <input class="form-control " style="background: transparent;border:none;"type="file" name="img" placeholder="img">
                        </div>
                        <div class="pb-3">
                            <input class="form-control " style="background: transparent;border:none;"type="number" name="niveau" placeholder="1-100">
                        </div>
                    </div>

                    <div class="pb-3">
                        <button type="submit" class="btn btn-light">Ajouter</button>
                    </div>

            </div>
            </form>

        </div>
    </div>
@endsection
