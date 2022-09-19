<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')

    @section('content')
        <div class="container my-5">

            <form action="/updatepok/{{ $pokemons->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row  ">
                    <div class="pb-3">
                        <input class="form-control " style="background: transparent;border:none;" type="text"
                            name="name" placeholder="name" value="{{ $pokemons->name }}" value="{{ old('name') }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="pb-3">
                        <select name="typepokemon_id" id="">
                            <option value="{{ $typeid->type }}">{{ $typeid->type }}</option>
                            @foreach ($typepokemons as $type)
                                @if ($typeid->id != $type->id)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="pb-3">
                        <div width="10% " class="mb-2">
                            <img width="10%" class="rounded-pill" src="{{ asset('storage/img/' . $pokemons->img) }}"
                                alt="">
                        </div>
                        <input class="form-control " style="background: transparent;border:none;"type="file"
                            name="img" value="{{ old('img') }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('img')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="pb-3">
                        <input class="form-control " style="background: transparent;border:none;"type="number"
                            name="niveau" placeholder="1-100" value={{ $pokemons->niveau }} value="{{ old('niveau') }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('niveau')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="pb-3">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>

        </div>
        </form>

    </div>
    </div>
@endsection
