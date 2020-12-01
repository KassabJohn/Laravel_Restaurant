<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'nom', 'adresse', 'ville', 'cp', 'description', 'cuisine', 'etat'
    ];
}
