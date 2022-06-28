<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenteDevise extends Model
{
    use HasFactory;
    protected $fillable = [
            'client_id',
            'devise_id',
            'taux_vente',
            'quantite_vente',
            'devise_client_id',
            'modepaiement',
            'ville_id',
            'montant_total_vente'

    ];
}
