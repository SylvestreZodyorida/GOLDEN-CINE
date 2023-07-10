<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'horaire',
        'nb_place_res',
        'id_user',
        'id_film',
        'name',
        'surname',
        'email',
        
        
    ];
}
