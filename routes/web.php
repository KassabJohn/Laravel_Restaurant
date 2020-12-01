<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'RestaurantController@index')->name('restaurant.index');
Route::post('restaurant', 'RestaurantController@store')->name('restaurant.store');
Route::get('restaurant/create', 'RestaurantController@create')->name('restaurant.create');
Route::get('restaurant/{restaurant}', 'RestaurantController@show')->name('restaurant.show');
Route::put('restaurant/{restaurant}', 'RestaurantController@update')->name('restaurant.update');
Route::delete('restaurant/{restaurant}', 'RestaurantController@destroy')->name('restaurant.destroy');
Route::get('restaurant/{restaurant}/edit', 'RestaurantController@edit')->name('restaurant.edit');
Route::resources(['restaurants'=> 'RestaurantController']);
