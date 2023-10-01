<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcosystemeHasEspece extends Model
{
    use HasFactory;
    protected $fillable = [
        'ecosysteme_id',
        'espece_id',
    ];
}
