<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\AchatDeviseController;
use App\Http\Controllers\VenteDeviseController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
/*** les routes de usercontrollers */
Route::get('/ajouterUser',[UserController::class,'GETPAGEADDUSER'])->name('GETPAGEADDUSER');
Route::get('/dashboard',[UserController::class,'GETPAGEGETDASHBORD'])->name('GETPAGEGETDASHBORD');
Route::get('/login',[UserController::class,'GOCONNECT'])->name('GOCONNECT');


Route::get('/listeUser',[UserController::class,'GETLISTEUSER'])->name('GETLISTEUSER');
Route::get('update-user',[UserController::class,'GETPAGEUPDATEUSER'])->name('GETPAGEUPDATEUSER');


Route::post('add-user',[UserController::class,'ADDUSER'])->name('ADDUSER');
Route::post('update-user/{id}',[UserController::class,'UPDATEUSER'])->name('UPDATEUSER');
Route::post('desactiver-user/{id}',[UserController::class,'DESACTIVERUSER'])->name('DESACTIVERUSER');
Route::post('authentifier',[UserController::class,'Authentification'])->name('Authentification');
Route::post('login',[UserController::class,'LOGOUT'])->name('LOGOUT');



/**  les controllerurs de client */
Route::get('/ajouterClient',[ClientController::class,'GETPAGEADDCLIENT'])->name('GETPAGEADDCLIENT');
Route::get('/listeClient',[ClientController::class,'GETPAGELISTECLIENT'])->name('GETPAGELISTECLIENT');
Route::get('/update-client',[ClientController::class,'GETPAGEUPDATECLIENT'])->name('GETPAGEUPDATECLIENT');

Route::post('/ajouterClient',[ClientController::class,'ADDCLIENT'])->name('ADDCLIENT');
Route::post('updateclient/{id}',[ClientController::class,'UPDATECLIENT'])->name('UPDATECLIENT');








Route::get('/welcome',[PageController::class,'GETPAGEACCUEIL'])->name('GETPAGEACCUEIL');

Route::get('/achatDevise',[AchatDeviseController::class,'GETPAGEACHATDEVISE'])->name('GETPAGEACHATDEVISE');
Route::get('/listeachat',[AchatDeviseController::class,'GETPAGELISTEACHAT'])->name('GETPAGELISTEACHAT');
Route::get('/update-vente',[AchatDeviseController::class,'GETPAGEUPDATEACHAT'])->name('GETPAGEUPDATEACHAT');
Route::get('vente-devise',[VenteDeviseController::class,'GETPAGEVENTEDEVISE'])->name('GETPAGEVENTEDEVISE');
Route::get('liste-vente',[VenteDeviseController::class,'LISTESENDDEVISE'])->name('LISTESENDDEVISE');
Route::get('update-vente',[VenteDeviseController::class,'GETPAGEUPDATEVENTE'])->name('GETPAGEUPDATEVENTE');
Route::post('update-vente/{id}',[VenteDeviseController::class,'UPDATEVENTE'])->name('UPDATEVENTE');


Route::post('vente-devise',[VenteDeviseController::class,'SENDDEVISE'])->name('SENDDEVISE');


Route::post('update/{id}',[AchatDeviseController::class,'UPDATEACHAT'])->name('UPDATEACHAT');
Route::post('supprimer/{id}',[AchatDeviseController::class,'SUPPRIMERACHAT'])->name('SUPPRIMERACHAT');






Route::post('/add-devise',[AchatDeviseController::class,'CREATEPAIEMENT'])->name('CREATEPAIEMENT');


Route::get('/ajouterFournisseur',[FournisseurController::class,'GETPAGEADDFOURNISSEUR'])->name('GETPAGEADDFOURNISSEUR');
Route::get('/listeFournisseur',[FournisseurController::class,'GETPAGELISTEFOURNISSEUR'])->name('GETPAGELISTEFOURNISSEUR');
Route::get('/update-fournisseur',[FournisseurController::class,'GETPAGEUPDATEFOURNISSEUR'])->name('GETPAGEUPDATEFOURNISSEUR');
Route::post('/ajouterFournisseur',[FournisseurController::class,'ADDFOURNISSEUR'])->name('ADDFOURNISSEUR');
Route::post('update-fournisseur/{id}',[FournisseurController::class,'UPDATEFOURNISSEUR'])->name('UPDATEFOURNISSEUR');


/*** Facture */
Route::get('/facture',[AchatDeviseController::class,'GETPAGEFACTURE'])->name('GETPAGEFACTURE');

Route::get('/factures',[VenteDeviseController::class,'GETPAGEFACTUREVENTE'])->name('GETPAGEFACTUREVENTE');





