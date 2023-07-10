<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_status',
        'id_user',
        'id_film',
        'montant',
        
    ];
}
