<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire_projection extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_pro',
        'heure_pro',
        
        
    ];
}
