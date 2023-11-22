<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'nom_scientifique',
        'famille',
        'longevite',
        'description',
        'image',
        'categorie',
        'poid_min',
        'poid_max',
        'taille_min',
        'taille_max',
        'hauteur_min',
        'hauteur_max',
        'genre',
        'type_reproduction',
        'type_regime',
    ];
}
