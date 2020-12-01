@extends('restaurants.layout')

@section('content')

    <form method="get">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search"><br>
        <button class="btn btn-success btn-sm" type="submit">Rechercher</button>
    </form>

    @if($search)
        <p>Résultat recherché: {{ $search }}</p>
        <a href="{{route("restaurants.index")}}" class="mb-5">Retourner a la liste des restaurants</a>
    @endif

    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="float-left">
        <h4>Liste des restaurants</h4>
    </div>

    <div class="col-md-3">
        <a class="btn btn-warning btn-sm" href="{{ route('restaurant.create') }}"> Ajouter un nouveau restaurant</a>
        <div class="float-right">

        </div>
    </div><br><br>

    <table class="table table-bordered">
        <thead class="thead">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>CP</th>
            <th>Description</th>
            <th>Cuisine</th>
            <th>Etat</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($restaurants as $restaurant)
            <tr>
                <td>{{ $loop->index}}</td>
                <td>{{ $restaurant->nom }}</td>
                <td>{{ $restaurant->adresse }}</td>
                <td>{{ $restaurant->ville }}</td>
                <td>{{ $restaurant->cp }}</td>
                <td>{{ $restaurant->description }}</td>
                <td>{{ $restaurant->cuisine }}</td>
                <td>{{ $restaurant->etat }}</td>
                <td>
                    <form action="{{ route('restaurant.destroy',$restaurant->id) }}" method="POST">
                        <a class="btn btn-secondary btn-sm" href="{{ route('restaurant.show',$restaurant->id) }}">Toutes les informations</a><br><br>
                        <a class="btn btn-primary btn-sm" href="{{ route('restaurant.edit',$restaurant->id) }}">Editer</a><br><br>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
