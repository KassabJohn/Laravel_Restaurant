<?php

use App\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Restaurant::class, 30)->create()->each(function ($restaurants) {
            $restaurants->save();
        });
    }
}
