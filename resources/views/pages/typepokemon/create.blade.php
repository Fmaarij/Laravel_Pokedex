@extends('layouts.index')
@section('content')
    <div class="container my-5">
        <form action="createtype" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Type</label>
            <input type="text" name="type" value="{{ old('type') }}">
            <span class=" btn-outline-danger">
                @error('type')
                    {{ $message }}
                @enderror
            </span>
            <button class="btn btn-outline-info">Ajouter</button>
        </form>
    </div>
@endsection
