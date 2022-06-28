<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use App\Models\Tier;
use App\Models\Ville;
use App\Models\Devise;
use App\Models\AchatDevise;
use App\Models\VenteDevise;

use Illuminate\Support\Facades\DB;

class VenteDeviseController extends Controller
{
    //

    /** function qui renvoie la page de vente de devise */


    public function GETPAGEVENTEDEVISE()

    {
        $listeDevise = Devise::All();
        $allville  = Ville::all();
        $listeclient = DB::table('tiers')
        ->join('clients','tiers.id','=','clients.tier_id')
        ->join('villes','clients.ville_id','=','villes.id')
        ->select('clients.id','tiers.nom_tier')
        ->orderBy('tiers.id','DESC')
        ->get();
        return view('pages.vente.venteDevise',[
            'listedevise'=>$listeDevise,
            'listeclient'=>$listeclient,
            'allville'=>$allville
        ]);
    }

    /** function qui permet de vendre les decvises */


    public function SENDDEVISE(Request $request)

    {
            $request->validate([
                'client_name'=>['required'],
                'deviseavendre'=>['required'],
                'taux'=>['required'],
                'quantite'=>['required'],
                'deviseclient'=>['required'],
                'modepaiement'=>['required'],
                'ville'=>['required']

            ]);

            $somme = $request->taux * $request->quantite;

            $ventedevise = VenteDevise::create([
                'client_id'=>$request->client_name,
                'devise_id'=>$request->deviseavendre,
                'taux_vente'=>$request->taux,
                'quantite_vente'=>$request->quantite,
                'devise_client_id'=>$request->deviseclient,
                'modepaiement'=>$request->modepaiement,
                'ville_id'=>$request->ville,
                'montant_total_vente'=>$somme
            ]);

            session()->flash('notification.message','Vente créé avec success');
            session()->flash('notification.type','success');
            return redirect()->route('GETPAGEVENTEDEVISE');
    }

    /*** FUNCTION QUI RECUPERE LA LISTE DES VENTES DEVISE */
    public function LISTESENDDEVISE(Request $request)

    {
                $listevente =  DB::table('tiers')
                ->join('clients','tiers.id','=','clients.tier_id')
                ->join('vente_devises','clients.id','=','vente_devises.client_id')
                ->join('devises','vente_devises.devise_id','=','devises.id')
                ->select('devises.nom_devise','tiers.nom_tier','tiers.telephone','tiers.raison_social','tiers.email_tier','vente_devises.*')
                ->orderBy('vente_devises.id','DESC')
                ->get();
              // die($listevente);
                $row = 1;

                return view('pages.vente.listeVente',[
                    'row'=>$row,
                    'listevente'=>$listevente
                ]);



            }

            /** FUNCTO */

            public function GETPAGEUPDATEVENTE()

            {
                $id = $_GET['id'];
                $listeDevise = Devise::All();
                $allville  = Ville::all();
                $id = $_GET['id'];
                $listeclient = DB::table('tiers')
                ->join('clients','tiers.id','=','clients.tier_id')
                ->join('vente_devises','clients.id','=','vente_devises.client_id')
                ->join('devises','vente_devises.devise_id','=','devises.id')
                ->select('vente_devises.*','tiers.nom_tier',)
                ->where('vente_devises.id',$id)
                ->get();
                    return view('pages.vente.updatevente',[
                        'listedevise'=>$listeDevise,
                        'info'=>$listeclient,
                        'allville'=>$allville
                    ]);
            }


            /** functin qui update une vente */


            public function UPDATEVENTE(Request $request,$id)

            {
                        $vente =  VenteDevise::find($id);
                        $request->validate([

                            'deviseavendre'=>['required'],
                            'taux'=>['required'],
                            'quantite'=>['required'],
                            'deviseclient'=>['required'],
                            'modepaiement'=>['required'],
                            'ville'=>['required']

                        ]);

                        $somme = $request->taux * $request->quantite;

                        $vente->update([
                            'devise_id'=>$request->deviseavendre,
                            'taux_vente'=>$request->taux,
                            'quantite_vente'=>$request->quantite,
                            'devise_client_id'=>$request->deviseclient,
                            'modepaiement'=>$request->modepaiement,
                            'ville_id'=>$request->ville,
                            'montant_total_vente'=>$somme
                        ]);

                        session()->flash('notification.message','Vente modifié avec succès');
                        session()->flash('notification.type','success');
                        return redirect()->route('LISTESENDDEVISE');


            }

    public function GETPAGEFACTUREVENTE()

    {
        $id = $_GET['id'];
        $infofacture = DB::table('vente_devises')
        ->join('clients','vente_devises.client_id','=','clients.id')
        ->join('tiers','clients.tier_id','=','tiers.id')
        ->join('devises','devises.id','=','vente_devises.devise_id')
        ->select('devises.nom_devise',
        'tiers.nom_tier',
        'tiers.adresse_tier',
        'tiers.raison_social',
        'tiers.email_tier',
        'tiers.telephone',
        'vente_devises.*'
        )
        ->where('vente_devises.id',$id)
        ->get();
        return view('pages.vente.factureVente',
       [ 'infofacture'=>$infofacture
       ]
    );
    }


}
