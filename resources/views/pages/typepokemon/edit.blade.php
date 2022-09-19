@extends('layouts.index')
@section('content')
    <div class="container my-5">
        <form action="/updatetype/{{ $typepokemons->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Type</label>
            <input type="text" name="type" value="{{ $typepokemons->type }}" value="{{ old('type') }}">
            <span class=" btn-outline-danger">
                @error('type')
                    {{ $message }}
                @enderror
            </span>
            <button class="btn btn-outline-warning">Update</button>
        </form>
    </div>
@endsection
