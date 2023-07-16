@extends('layouts.master')

@section('content')

<h1>Modificar película</h1>

<form method="POST" action="{{url('/catalog/edit/' . $movie->id )}}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$movie->title}}">
    </div>

    <div class="form-group">
        <label for="year">Año</label>
        <input type="text" class="form-control" id="year" name="year" value="{{$movie->year}}">
    </div>

    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director" name="director" value="{{$movie->director}}">
    </div>

    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster" value="{{$movie->poster}}">
    </div>

    <div class="form-group">
        <label for="synopsis">Resumen</label>
        <textarea class="form-control" id="synopsis" name="synopsis" rows="4">{{$movie->synopsis}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Modificar película</button>
</form>

@endsection
