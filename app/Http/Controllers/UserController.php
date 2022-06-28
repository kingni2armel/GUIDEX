<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employe;
use App\Models\Devise;
use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\VenteDevise;
use App\Models\AchatDevise;


use App\Models\Administrateur;

class UserController extends Controller
{
    //

    /*** function qui renvoie a la vue de connexion */


    public function GOCONNECT()
    {
        return view('login');
    }

    /** function qui permet de se connecter */
public function GETPAGEGETDASHBORD ()

{
    $alluser = User::all();
    $allemploye =  Employe::all();
    $alldevise =  Devise::all();
    $allclient  =  Client::all();
    $allfournisseur =  Fournisseur::all();
    $allvente =  VenteDevise::all();
    $allachat =  AchatDevise::All();
    return view('welcome',[
        'alluser'=>$alluser,
        'allemploye'=>$allemploye,
        'alldevise'=>$alldevise,
        'allclient'=>$allclient,
        'allfournisseur'=>$allfournisseur,
        'allvente'=>$allvente,
        'allachat'=>$allachat
    ]);
}

    public function Authentification(Request $request)
    {
            $request->validate([
                'email'=>['required'],
                'password'=>['required']
            ]);


            if(auth()->attempt($request->only('email','password')))
            {
                    return redirect()->route('GETPAGEGETDASHBORD');
            } else {
                session()->flash('notification.message','Les identifiant ne correspondent pas');
                session()->flash('notification.type','danger');
                return redirect()->route('GOCONNECT');
            }
    }



    /**** function qui permet de se connecter */

    public function LOGOUT()
    {
            Session::flush();
            Session::logout();
            return redirect()->route('GOCONNECT');
    }

    /** function qui permet de creer un user */

    /***funtion qui renvoie a la page de creation du user */


    public function GETPAGEADDUSER()

    {
        return view('pages.user.ajouterUser');
    }

    public function ADDUSER(Request $request)
    {
                $request->validate([
                        'name'=>['required'],
                        'role'=>['required'],
                        'username'=>['required'],
                        'email'=>['required'],
                        'telephone'=>['required'],
                        'password'=>['required']
                ]);

                $user =  User::create([
                        'name'=>$request->name,
                        'username'=>$request->username,
                        'email'=>$request->email,
                        'telephone'=>$request->telephone,
                        'role'=>$request->role,
                        'statut_user'=>1,
                        'password'=>Hash::make($request->password)
                ]);


                if($request->role ==='admin')
                {
                    Administrateur::create([
                        'user_id'=>$user->id
                    ]);
                } else {
                        Employe::create([
                            'user_id'=>$user->id
                        ]);
                }

                session()->flash('notification.message','Utilisateur créé avec success');
                session()->flash('notification.type','success');

                return redirect()->route('GETPAGEADDUSER');

    }

    /*** function qui permet fde lister un user */

    public function GETLISTEUSER()


    {
            $liste  = User::all();
            $row = 1;

            return view('pages.user.listerUser',[
                'liste'=>$liste,
                'row'=>$row
            ]);

    }

    /** function qui permet d'aller a la page  pour modifier un user */


    public function GETPAGEUPDATEUSER()
    {
        $id = $_GET['id'];
            $infouser =  User::where('users.id',$id)->get();

        return view('pages.user.updateUser',[
            'infouser'=>$infouser
        ]);
    }


    /** function qui permet d'update le user */

    public function UPDATEUSER(Request $request,$id)
    {

        $user = User::find($id);

        $request->validate([
            'name'=>['required'],
            'username'=>['required'],
            'email'=>['required'],
            'telephone'=>['required'],
            'password'=>['required']
    ]);
        $user->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'password'=>Hash::make($request->password)
        ]);
        session()->flash('notification.message','Utilisateur modifié avec succès');
        session()->flash('notification.type','success');
        return redirect()->route('GETLISTEUSER');
    }




    /*** funtion qui permet de desactiver un utilisateur */


    public function DESACTIVERUSER(Request $request,$id)
    {
        $user = User::find($id);

        $user->update([
            'statut_user'=>0
        ]);

        session()->flash('notification.message','Utilisateur desactivé avec succès');
        session()->flash('notification.type','success');
        return redirect()->route('GETLISTEUSER');
    }
}
