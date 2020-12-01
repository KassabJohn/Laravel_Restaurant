@extends('restaurants.layout')

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Editer un élève</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('restaurant.index') }}">Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreur, vous n'avez pas rempli tous les champs</strong><br>

        </div>
    @endif

    <form action="{{ route('restaurant.update',$restaurant->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="{{ $restaurant->nom }}">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="{{ $restaurant->adresse }}">
        </div>

        <div class="form-group">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="{{ $restaurant->ville }}">
        </div>

        <div class="form-group">
            <label for="cp">eMail:</label>
            <input type="text" class="form-control" id="cp" name="cp" placeholder="CP" value="{{ $restaurant->cp }}">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ $restaurant->description }}">
        </div>

        <div class="form-group">
            <label for="cuisine">Cuisine:</label>
            <input type="text" class="form-control" id="cuisine" name="cuisine" placeholder="Cuisine" value="{{ $restaurant->cuisine }}">
        </div>

        <div class="form-group">
            <label for="etat">Etat:</label>
            <input type="text" class="form-control" id="etat" name="etat" placeholder="Etat" value="{{ $restaurant->etat }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
