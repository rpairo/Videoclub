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