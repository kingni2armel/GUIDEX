<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function GETPAGEACCUEIL()

    {
        return view('welcome');
    }

    public function GETPAGEACHATDEVISE()

    {
        return view('pages.achat.achatDevise');
    }

    public function GETPAGELISTEACHAT()

    {
        return view('pages.achat.listeAchat');
    }

    public function GETPAGEVENTEDEVISE()

    {
        return view('pages.vente.venteDevise');
    }

    public function GETPAGELISTEVENTE()

    {
        return view('pages.vente.listeVente');
    }

    public function GETPAGEADDDEVISE()

    {
        return view('pages.devise.add-devise');
    }

    public function GETPAGEADDCLIENT()

    {
        return view('pages.client.ajouterClient');
    }

    public function GETPAGELISTCLIENT()

    {
        return view('pages.client.listeClient');
    }

    public function GETPAGEADDFOURNISSEUR()

    {
        return view('pages.fournisseur.ajouterFournisseur');
    }

    public function GETPAGELISTEFOURNISSEUR()

    {
        return view('pages.fournisseur.listeFournisseur');
    }


    public function GETPAGEADDUSER()

    {
        return view('pages.user.ajouterUser');
    }

    public function GETPAGELISTEUSER()

    {
        return view('   ');
    }

    public function GETPAGEFACTURE()

    {
        return view('facture');
    }


}
