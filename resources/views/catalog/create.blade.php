@extends('layouts.master')

@section('content')

<h1>Añadir película</h1>

<form method="POST" action="{{url('/catalog/create')}}">
    @csrf

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
        <label for="year">Año</label>
        <input type="text" class="form-control" id="year" name="year">
    </div>

    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director" name="director">
    </div>

    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster">
    </div>

    <div class="form-group">
        <label for="synopsis">Resumen</label>
        <textarea class="form-control" id="synopsis" name="synopsis" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Añadir película</button>
</form>

@endsection
