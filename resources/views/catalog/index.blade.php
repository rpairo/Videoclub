@extends('layouts.master')

@section('content')

<div class="row">
    @foreach($movies as $movie)
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-white">
            <div class="card-img-container">
                <img src="{{ $movie->poster }}" class="card-img" alt="{{ $movie->title }}">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <div class="card-info">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">
                            <strong>Año:</strong> {{ $movie->year }}<br>
                            <strong>Director:</strong> {{ $movie->director }}
                        </p>
                    </div>
                    <div class="card-status">
                        <span class="badge {{ $movie->rented ? 'badge-danger' : 'badge-success' }}">{{ $movie->rented ? 'Alquilada' : 'Disponible' }}</span>
                    </div>
                </div>
                <div class="card-synopsis-overlay">
                    <p class="card-synopsis">{{ $movie->synopsis }}</p>
                    <div class="card-actions">
                        <a href="{{ url('/catalog/show/' . $movie->id ) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
.card {
    border: none;
    overflow: hidden;
    position: relative;
}

.card-img-container {
    height: 600px;
    position: relative;
}

.card-img {
    object-fit: cover;
    height: 100%;
    transition: opacity 0.3s ease;
}

.card-img-overlay {
    background-color: rgba(0, 0, 0, 0.5);
    transition: background-color 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1.25rem;
    height: 100%;
}

.card-info {
    margin-bottom: 1rem;
}

.card-title {
    margin-bottom: 0.5rem;
}

.card-status {
    text-align: right;
}

.badge {
    font-size: 14px;
    padding: 0.5rem 1rem;
}

.badge-danger {
    background-color: #dc3545;
}

.badge-success {
    background-color: #28a745;
}

.card-synopsis-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.25rem;
}

.card-synopsis-overlay:hover {
    opacity: 1;
}

.card-synopsis {
    font-size: 14px;
    margin-bottom: 0;
    color: #fff;
}

.card-actions {
    display: none;
    margin-top: auto;
}

.card-synopsis-overlay:hover .card-actions {
    display: flex;
    justify-content: center;
}

.btn {
    width: 100%;
}
</style>

@endsection
