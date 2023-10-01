<?php

namespace App\Models;

use App\Models\Espece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ecosysteme extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'localisation',
        'typesol',
        'auteur',
    ];
    public function updateEspeces($especeIds) {
        
        $this->especes()->sync($especeIds);
    
    }
    public function especes() {

        return $this->belongsToMany(Espece::class, 'ecosysteme_has_especes');

    }
}
