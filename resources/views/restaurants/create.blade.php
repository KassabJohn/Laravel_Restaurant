@extends('restaurants.layout')

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Ajouter un nouvel élève</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('restaurant.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreur, vous n'avez pas rempli tous les champs</strong><br>

        </div>
    @endif

    <form action="{{ route('restaurant.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
        </div>

        <div class="form-group">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
        </div>

        <div class="form-group">
            <label for="cp">eMail:</label>
            <input type="text" class="form-control" id="cp" name="cp" placeholder="CP">
        </div>

        <div class="form-group">
            <label for="cuisine">Cuisine:</label>
            <input type="text" class="form-control" id="cuisine" name="cuisine" placeholder="Cuisine">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="etat">Etat:</label>
            <input type="text" class="form-control" id="etat" name="etat" placeholder="Etat">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
