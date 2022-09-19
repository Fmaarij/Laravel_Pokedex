@extends('layouts.index')
@section('content')
<div class="container my-5">
<form action="/update/{{$typepokemons->id}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<label for="">Type</label>
<input type="text" name="type" value="{{$typepokemons->type}}">
<button class="btn btn-outline-warning">Update</button>
</form>
</div>
@endsection
