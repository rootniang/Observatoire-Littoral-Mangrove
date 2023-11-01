<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'type',
        'chemin',
        'auteur',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'auteur');
    }
}
