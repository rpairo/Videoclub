@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="{{ $movie->poster }}" style="height:600px"/>
    </div>
    
    <div class="col-sm-8">
        <h1>{{$movie->title}}</h1>
        <p>Año: {{$movie->year}}</p>
        <p>Director: {{$movie->director}}</p>
        <p><b>Resumen:</b> {{$movie->synopsis}}</p>

        @if($movie->rented)
            <p><b>Estado:</b> Película actualmente alquilada</p>
            <!-- Devolver película -->
            <form action="{{ route('catalog.return', ['id' => $movie->id]) }}" method="POST" style="display:inline">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-danger" style="display:inline">
                    Devolver película
                </button>
            </form>
        @else
            <p><b>Estado:</b> Película disponible</p>
            <form action="{{ route('catalog.rent', ['id' => $movie->id]) }}" method="POST" style="display:inline">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-primary" style="display:inline">
                    Alquilar película
                </button>
            </form>
        @endif

        @if( Auth::user()->role->name == 'admin' )
        <a href="{{url('/catalog/edit/' . $movie->id)}}" class="btn btn-warning text-white"><i class="fas fa-pen"></i> Editar película</a>

        <!-- Eliminar película -->
        <form action="{{ route('catalog.delete', ['id' => $movie->id]) }}" method="POST" style="display:inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" style="display:inline">
                Eliminar película
            </button>
        </form>
        @endif

        <a href="{{url('/catalog')}}" class="btn btn-default" style="border: 1px solid black;"><i class="fas fa-chevron-left"></i> Volver al listado</a>
    </div>
</div>

@endsection