<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'nom' => $faker->company,
        'adresse' => $faker->streetAddress,
        'ville' => $faker->city,
        'cp' => $faker->postcode,
        'description' => $faker->paragraph,
        'cuisine' => $faker->randomElement($array = array ('Pizza','Hamburger','Steak Frites')),
        'etat' => $faker->randomElement($array = array ('Ouvert','Fermé','En travaux')),
    ];
});
