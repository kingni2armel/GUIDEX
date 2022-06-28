<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use App\Models\Tier;
use App\Models\Ville;
use App\Models\Devise;
use App\Models\AchatDevise;
use Illuminate\Support\Facades\DB;

class AchatDeviseController extends Controller{

    public function GETPAGEACHATDEVISE()

    {
        $listeDevise = Devise::All();
        $listefournisseur = DB::table('tiers')
        ->join('fournisseurs','tiers.id','=','fournisseurs.tier_id')
        ->join('villes','fournisseurs.ville_id','=','villes.id')
        ->select('tiers.*')
        ->orderBy('tiers.id','DESC')
        ->get();
        return view('pages.achat.achatDevise', [
            'listeDevise'=>$listeDevise,
            'listefournisseur'=>$listefournisseur
        ]);
    }

    public function CREATEPAIEMENT(Request $request)

    {
            $request->validate([
                    'fournisseur'=>['required'],
                    'devise'=>['required'],
                    'taux'=>['required'],
                    'quantite'=>['required']
            ]);

            $somme = $request->taux*$request->quantite;

            $achatdevise =  AchatDevise::create([
                'fournisseur_id'=>$request->fournisseur,
                'devise_id'=>$request->devise,
                'taux_achat'=>$request->taux,
                'quantite_achat'=>$request->quantite,
                'somme_achat'=>$somme
            ]);

            session()->flash('notification.message','Achat créé avec success');
            session()->flash('notification.type','success');
            return redirect()->route('GETPAGEACHATDEVISE');
    }

/*** function qui renvoie la liste ds achats */


        public function GETPAGELISTEACHAT()
        {
            $row = 1;
            $listeachat = DB::table('tiers')
            ->join('fournisseurs','tiers.id','=','fournisseurs.tier_id')
            ->join('achat_devises','fournisseurs.id','=','achat_devises.fournisseur_id')
            ->join('devises','achat_devises.devise_id','=','devises.id')
            ->select('achat_devises.*','tiers.nom_tier','tiers.email_tier','tiers.telephone','devises.nom_devise')
            ->orderBy('achat_devises.id','DESC')
            ->get();
          //  die($listeachat);
            return view('pages.achat.listeachat',[
                'listeachat'=>$listeachat,
                'row'=>$row
            ]);
        }


        public function GETPAGEUPDATEACHAT()
        {
            $listeDevise = Devise::All();
            $listefournisseur = DB::table('tiers')
            ->join('fournisseurs','tiers.id','=','fournisseurs.tier_id')
            ->join('villes','fournisseurs.ville_id','=','villes.id')
            ->select('tiers.*')
            ->get();
            $id = $_GET['id'];
            $listeachat = DB::table('tiers')
            ->join('fournisseurs','tiers.id','=','fournisseurs.tier_id')
            ->join('achat_devises','fournisseurs.id','=','achat_devises.fournisseur_id')
            ->join('devises','achat_devises.devise_id','=','devises.id')
            ->select('achat_devises.*','tiers.nom_tier','tiers.email_tier','tiers.telephone','devises.nom_devise')
            ->where('achat_devises.id',$id)
            ->get();

            return view('pages.achat.updateachat',[
                'listeDevise'=>$listeDevise,
                'listefournisseur'=>$listefournisseur,
                'infoachat'=>$listeachat
            ]);
        }

        /** function de mofication de l'achat */


        public function UPDATEACHAT(Request $request,$id)
        {
            $achat = AchatDevise::find($id);
            $request->validate([
                'fournisseur'=>['required'],
                'devise'=>['required'],
                'taux'=>['required'],
                'quantite'=>['required']
        ]);
        $somme = $request->taux*$request->quantite;

            $achat->update([
                'fournisseur_id'=>$request->fournisseur,
                'devise_id'=>$request->devise,
                'taux_achat'=>$request->taux,
                'quantite_achat'=>$request->quantite,
                'somme_achat'=>$somme
            ]);

            session()->flash('notification.message','Achat modifié avec succès!');
            session()->flash('notification.type','success');
            return redirect()->route('GETPAGELISTEACHAT');

        }



        /*** FUNCITON QUI PERMET DE SUPPRIMER UN AHAT */


        public function SUPPRIMERACHAT(Request $request,$id)
        {
            $achat = AchatDevise::find($id);
            $achat->delete();
            session()->flash('notification.message','L\'achat a été supprimé avec succès!');
            session()->flash('notification.type','danger');
            return redirect()->route('GETPAGELISTEACHAT');
        }


    public function GETPAGEFACTURE()

    {
        $id = $_GET['id'];
        $infofacture = DB::table('achat_devises')
        ->join('fournisseurs','achat_devises.fournisseur_id','=','fournisseurs.id')
        ->join('tiers','fournisseurs.tier_id','=','tiers.id')
        ->join('devises','devises.id','=','achat_devises.devise_id')
        ->select('devises.nom_devise',
        'tiers.nom_tier',
        'tiers.adresse_tier',
        'tiers.raison_social',
        'tiers.email_tier',
        'tiers.telephone',
        'achat_devises.*'
        )
        ->where('achat_devises.id',$id)
        ->get();
        return view('facture',
       [ 'infofacture'=>$infofacture
       ]
    );
    }
}
