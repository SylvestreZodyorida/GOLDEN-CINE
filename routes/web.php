<?php

use App\Http\Controllers\acceuilController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\filmController;
use App\Http\Controllers\horaireProController;
use App\Http\Controllers\paiementController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\adduserController;
use App\Http\Controllers\reservationTemponController;

use App\Http\Controllers\editController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\todayController;
use App\Http\Controllers\afterController;
use App\Http\Controllers\googleAuthController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/acceuil',[acceuilController::class ,'index' ])->name('acceuil');
Route::get('/Welcom-to-GoldenCINE-page',[welcomeController::class ,'index' ])->name('welcome');
Route::get('/user-profile',[acceuilController::class ,'profile' ])->name('user-profile');

Route::post('/',[TodolistController::class ,'store' ])->name('store');
Route::delete('/{todolist:id}',[TodolistController::class ,'destroy' ])->name('destroy');
Route::get('/programme',[programmeController::class ,'index' ])->name('programme');
Route::get('/rebours',[compte_a_rebourController::class ,'index' ])->name('compte_a_rebours');
Route::get('/actualite',[actualiteController::class ,'index' ])->name('actualite');
Route::get('/fetes',[feteController::class ,'index' ])->name('fete');

Route::post("/contact/{contact}", [contactController::class, "update"])->name("contact.update");
Route::get('/contact',[contactController::class ,'index' ])->name('contact');
Route::get('/liste_contacts',[contactController::class ,'liste' ])->name('liste_contacts');

Route::get('/after',[horaireProController::class ,'after' ])->name('after');




Route::get('/messagerie',[messagerieController::class ,'index' ])->name('messagerie');

Route::get("/rechercher-un-film",[filmController::class ,'search'])->name('recherche');
Route::get('auth/google',[googleAuthController::class ,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[googleAuthController::class ,'callBackGoogle']);
// Route::get('/historique-reservation',[filmController::class ,'reservHistorique' ])->name('historique-reservation');
Route::get('/historique-reservation',[filmController::class ,'reservHistorique' ])->name('historique-reservation');
Route::post('/etape1-reservation-page',[reservationController::class ,'etape1' ])->name('etape1');
Route::post('/temp-reservation-page',[reservationTemponController::class ,'etape3' ])->name('etape3');
Route::get('/ticke-numerique',[reservationTemponController::class ,'ticket' ])->name('ticket_page');
Route::get('/Ann-reserv',[reservationTemponController::class ,'conseq' ])->name('conseq_ann');

Route::get('/payment-page',[reservationController::class ,'userPayPage' ])->name('paiement-page');
Route::get('/info-film/{film}',[reservationController::class ,'infoFilm' ])->name('infoFilm');
Route::get('/info-film1/',[reservationController::class ,'infoFilmAcceuil1' ])->name('infoFilmAcceuil1');
Route::get('/info-film/',[reservationController::class ,'infoFilmAcceuil2' ])->name('infoFilmAcceuil2');
Route::get('/payment',[paiementController::class ,'userPaySend' ])->name('paiement-envoie');
Route::post('/reserv/paystore',[paiementController::class ,'store' ])->name('confirm_reservation');


Route::delete("/reservation/{reservation}", [reservationController::class, "delete"])->name("reservation-ann");
Route::get('/reservation-page/{film}',[reservationController::class ,'reservPage' ])->name('reservation-page');



Auth::routes();

Route::middleware(['auth' ,'role:admin'])->group(function(){ 
    // Route::get('/', [adminController::class, 'index'])->name('Admin-Page');
    Route::get('/', [adminController::class, 'liste'])->name('Admin-Page');
    Route::get('/liste-film',[filmController::class ,'liste' ])->name('liste-film');
    Route::get('/ajout-film',[filmController::class ,'index' ])->name('ajout-film');
    Route::post('/envoie-film',[filmController::class ,'store' ])->name('envoie-film');
    Route::post('/envoie-admin',[adminController::class ,'store' ])->name('envoie-admin');
    Route::get("/film/{film}", [filmController::class, "update"])->name("film-edit");
    Route::delete("/film/{film}", [filmController::class, "delete"])->name("film-supp");


    Route::get('/liste-reservation',[reservationController::class ,'liste' ])->name('liste-reservation');

    Route::get('/horaire-pro',[horaireProController::class ,'index' ])->name('horaire-pro');
    Route::get('/ajout-horaire-pro',[horaireProController::class ,'liste' ])->name('ajout-horaire-pro');
    Route::post('/envoie-horaire-pro',[horaireProController::class ,'store' ])->name('envoie-horaire');
    Route::get("/horaire/{horaire}", [horaireProController::class, "edit"])->name("horaire-edit");
    Route::delete("/horaire/{horaire}", [horaireProController::class, "delete"])->name("horaire-supp");

    Route::get('/ajout-user',[adduserController::class ,'index' ])->name('ajout-user');



    Route::get('/liste-paiement',[paiementController::class ,'liste' ])->name('liste-paiement');





});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
