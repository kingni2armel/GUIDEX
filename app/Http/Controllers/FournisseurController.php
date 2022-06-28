<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Tier;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\DB;


class FournisseurController extends Controller
{
    //
    public function GETPAGEADDFOURNISSEUR()

    {
        $listeville  = Ville::all();
        return view('pages.fournisseur.ajouterFournisseur', [
            'listeville'=>$listeville
        ]);
    }

    /*** Function qui permet d'ajouter un fournisseur */
    public function ADDFOURNISSEUR (Request $request)

    {
            $request->validate([
                'name'=>['required'],
                'devise'=>['required'],
                'ville'=>['required'],
                'adresse'=>['required'],
                'telephone'=>['required'],
                'email'=>['required'],
                'raison_social'=>['required']
            ]);

          $tier =Tier::create([
                'nom_tier'=>$request->name,
                'adresse_tier'=>$request->adresse,
                'devise'=>$request->devise,
                'raison_social'=>$request->raison_social,
                'email_tier'=>$request->email,

                'telephone'=>$request->telephone

          ]);


          $client =  Fournisseur::create([
                'tier_id'=>$tier->id,
                'ville_id'=>$request->ville
          ]);

          session()->flash('notification.message','Fournisseur créé avec success');
          session()->flash('notification.type','success');

          return redirect()->route('GETPAGEADDFOURNISSEUR');
    }

    /*** Function qui renvoie la liste des fournisseurs */
    public function GETPAGELISTEFOURNISSEUR()

    {
        $row = 1;
        $listeclient = DB::table('tiers')
        ->join('fournisseurs','tiers.id','=','fournisseurs.tier_id')
        ->join('villes','fournisseurs.ville_id','=','villes.id')
        ->select('tiers.*','villes.nom_ville')
        ->orderBy('tiers.id','DESC')
        ->get();
        return view('pages.fournisseur.listeFournisseur',[
            'row'=>$row,
            'listeclient'=>$listeclient
        ]);
    }

    /*** function qui renvoie la page de modification d'un fournisseur */
    public function GETPAGEUPDATEFOURNISSEUR()
{
    $listeville  =  Ville::all();
    $id = $_GET['id'];
    $infotier  = Tier::where('id',$id)->select('tiers.*')->get();
    return view('pages.fournisseur.update-fournisseur',[
        'listeville'=>$listeville,
        'infotier'=>$infotier
    ]);


}

/*** Function aui permet d'Update un fournisseur */
public function UPDATEFOURNISSEUR(Request $request,$id)
{
            $fournisseur = Tier::find($id);
            $request->validate([
                'name'=>['required'],
                'devise'=>['required'],
                'ville'=>['required'],
                'adresse'=>['required'],
                'telephone'=>['required'],
                'email'=>['required'],
                'raison_social'=>['required']
            ]);

            $fournisseur->update([
                'nom_tier'=>$request->name,
                'adresse_tier'=>$request->adresse,
                'devise'=>$request->devise,
                'raison_social'=>$request->raison_social,
                'email_tier'=>$request->email,
                'telephone'=>$request->telephone
            ]);

            session()->flash('notification.message','fournisseur modifié avec succès');
            session()->flash('notification.type','success');
            return redirect()->route('GETPAGELISTEFOURNISSEUR');
}
}

