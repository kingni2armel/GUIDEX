<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatDevise extends Model
{
    use HasFactory;

    protected $fillable=[
            'fournisseur_id',
            'devise_id',
            'somme_achat',
            'taux_achat',
            'quantite_achat'



    ];
}
