<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get("search");
        if($search) {
            $restaurants = Restaurant::where('nom', 'like', '%'.$search.'%')->
            orWhere('adresse', 'like', '%'.$search.'%')->
            orWhere('ville', 'like', '%'.$search.'%')->
            orWhere('cp', 'like', '%'.$search.'%')->
            orWhere('description', 'like', '%'.$search.'%')->
            orWhere('cuisine', 'like', '%'.$search.'%')->
            orWhere('etat', 'like', '%'.$search.'%')->
            get();
        } else {
            $restaurants = Restaurant::all();
        }

        return view('restaurants.index', ['restaurants'=>$restaurants, 'search'=>$search]);
    }



    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'cp' => 'required',
            'description' => 'required',
            'cuisine' => 'required',
            'etat' => 'required'
        ]);

        Restaurant::create($request->all());

        return redirect()->route('restaurant.index')
            ->with('success','Restaurant créé avec succès');
    }


    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show',[
            'restaurant' => $restaurant
        ]);
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit')->with([
            'restaurant' => $restaurant
        ]);
    }


    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'cp' => 'required',
            'description' => 'required',
            'cuisine' => 'required',
            'etat' => 'required'
        ]);

        $restaurant->update($request->all());

        return redirect()->route('restaurant.index')
            ->with('success','Restaurant modifié avec succès');
    }


    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurant.index')
            ->with('success','Restaurant supprimé avec succès');
    }
}
