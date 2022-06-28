<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;


    protected $fillable =[
        'nom_tier',
        'adresse_tier',
        'devise',
        'raison_social',
        'telephone',
        'email_tier'

    ];
}
