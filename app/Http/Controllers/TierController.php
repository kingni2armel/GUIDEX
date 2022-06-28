<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ville;

class TierController extends Controller
{
    //
    public function GETPAGEADDCLIENT()

    {
        return view('pages.client.ajouterClient');
    }


}
