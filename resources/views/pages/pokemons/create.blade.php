<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')

    @section('content')
        <div class="container my-5">

            <form action="/createpok" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row  ">
                    <div class="pb-3">
                        <input class="form-control " style="background: transparent;border:none;" type="text"
                            name="name" placeholder="name" value="{{ old('name') }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="pb-3">
                        <select name="typepokemon_id" id="">
                            @foreach ($typepokemons as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class=" btn-outline-danger">
                        @error('typepokemon_id')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="pb-3">
                        <input class="form-control " style="background: transparent;border:none;"type="file"
                            name="img" placeholder="img" value="{{ old('img') }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('img')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="pb-3">
                        <input class="form-control " style="background: transparent;border:none;"type="number"
                            name="niveau" placeholder="1-100" value="{{ old('niveau') }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('niveau')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="pb-3">
                    <button type="submit" class="btn btn-light">Ajouter</button>
                </div>

        </div>
        </form>

    </div>
    </div>
@endsection
