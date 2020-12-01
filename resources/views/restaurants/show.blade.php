@extends('restaurants.layout')

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('restaurant.index') }}">Retour</a>
            </div>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <strong><div style="color: red">INFORMATIONS A PROPOS DU RESTAURANT</div></strong>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nom:</strong>
                {{ $restaurant->nom }}</li>
            <li class="list-group-item"><strong>Adresse:</strong>
                {{ $restaurant->adresse }}</li>
            <li class="list-group-item"><strong>Ville:</strong>
                {{ $restaurant->ville }}</li>
            <li class="list-group-item"><strong>CP:</strong>
                {{ $restaurant->cp }}</li>
            <li class="list-group-item"><strong>Description:</strong>
                {{ $restaurant->cp }}</li>
            <li class="list-group-item"><strong>Cuisine:</strong>
                {{ $restaurant->cuisine }}</li>
            <li class="list-group-item"><strong>Etat:</strong>
                {{ $restaurant->etat }}</li>
        </ul>
    </div>

@endsection
