<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'synopsis',
        'duree',
        'genre',
        'horaire_id',
        'acteurs',
        'image',
        'place_total'
        
    ];

    public function horaire(){
        return $this->belongsTo(Horaire_projection::class);
     }
}
