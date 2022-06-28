<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Tier;
use App\Models\Client;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    //

    public function GETPAGEADDCLIENT()

    {
        $listeville  = Ville::all();

        return view('pages.client.ajouterClient',[
            'listeville'=>$listeville
        ]);
    }


    /*** function qui permet d'ajouter un client     */


    public function ADDCLIENT (Request $request)

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


          $client =  Client::create([
                'tier_id'=>$tier->id,
                'ville_id'=>$request->ville
          ]);

          session()->flash('notification.message','Client créé avec success');
          session()->flash('notification.type','success');

          return redirect()->route('GETPAGEADDCLIENT');
    }


    /*** function qui renvoie la liste des clients */

    public function GETPAGELISTECLIENT()
    {
        $row = 1;
        $listeclient = DB::table('tiers')
        ->join('clients','tiers.id','=','clients.tier_id')
        ->join('villes','clients.ville_id','=','villes.id')
        ->select('tiers.*','villes.nom_ville')
        ->orderBy('tiers.id','DESC')
        ->get();
        return view('pages.client.listeClient',[
            'row'=>$row,
            'listeclient'=>$listeclient
        ]);
    }


    /*** function qui permet d'Update un client */

    public function GETPAGEUPDATECLIENT()
{
    $listeville  =  Ville::all();
    $id = $_GET['id'];
    $infotier  = Tier::where('id',$id)->select('tiers.*')->get();
    return view('pages.client.update-client',[
        'listeville'=>$listeville,
        'infotier'=>$infotier
    ]);
    return redirect()->route('GETPAGELISTECLIENT');

}


/*** function qui permet de modifier un client */


        public function UPDATECLIENT(Request $request,$id)
        {
                    $client = Tier::find($id);
                    $request->validate([
                        'name'=>['required'],
                        'devise'=>['required'],
                        'ville'=>['required'],
                        'adresse'=>['required'],
                        'telephone'=>['required'],
                        'email'=>['required'],
                        'raison_social'=>['required']
                    ]);

                    $client->update([
                        'nom_tier'=>$request->name,
                        'adresse_tier'=>$request->adresse,
                        'devise'=>$request->devise,
                        'raison_social'=>$request->raison_social,
                        'email_tier'=>$request->email,
                        'telephone'=>$request->telephone
                    ]);

                    session()->flash('notification.message','Client modifié avec succès');
                    session()->flash('notification.type','success');
                    return redirect()->route('GETPAGELISTECLIENT');
        }

}




