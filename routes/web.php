<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\InterventionController;

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
    return view('welcome');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function () {

    // AJOUTER UN TECHNICIEN
    Route::post('users', 'UsersController@store')->name('users.store');

    // REDIRECTION VERS LA PAGE D'INSCRIPTION DES ENTREPRISE
    Route::get('users/create', 'UsersController@create')->name('users.create');

    // REDIRECTION VERS LA DASHBOARD
    Route::get('users/dashboard', 'UsersController@dash')->name('users.dash.view');

    // REDIRECTION VERS LA LISTE DES BENEFICIAIRE
    Route::get('users/dashboard/listeb', 'UsersController@listutil')->name('users.dash.listutil');

    // SUPPRIMER UN BENEFICIAIRE
    Route::delete('users/dashboard/listeb/{user}', 'UsersController@delben')->name('users.dash.listutil.destroy');

    // REDIRECTION VERS LA LISTE DES TECHNICIENS
    Route::get('users/dashboard/listetech', 'UsersController@listtech')->name('users.dash.listtech');

    // SUPPRIMER UN TECHNICIENS
    Route::delete('users/dashboard/listtech/{user}', 'UsersController@deltech')->name('users.dash.listtech.destroy');

    // REDIRECTION VERS LA LISTE DES ENTREPRISE
    Route::get('users/dashboard/listeentreprise', 'UsersController@listent')->name('users.dash.listent');

    // SUPPRIMER UNE ENTREPRISE
    Route::delete('users/dashboard/listent/{user}', 'UsersController@delent')->name('users.dash.listent.destroy');

    // REDIRECTION VERS LA PAGE DES TECHNICIENS + RECHERCHE UNE MATRICULE
    Route::get('users/technicien/recherche/', 'UsersController@recherche')->name('users.tech.recherche');
});
// REDIRECTION VERS LA PAGE DE CONTACT
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

// REDIRECTION VERS LA PAGE POURQUOI PRESSER SES PNEUS
Route::get('/pressionpneu', [App\Http\Controllers\PressionController::class, 'pressionpneu'])->name('pressionpneu');

// REDIRECTION VERS LA PAGE EXPLICATIF DU SITE
Route::get('/commentfonctionne', function () {
    return view('commentfonctionne');
})->name('commentfonctionne');


// REDIRECTION VERS LA PAGE DES TECHNICIENS QUAND IL SE CONNECT
Route::get('/hometechnicien', function () {
    return view('hometech');
})->name('technicien');

// REDIRECTION VERS LA PAGE D'INTERVENTION à REMPLIR
Route::get('users/technicien/recherche/intervention', 'App\Http\Controllers\InterventionController@getIntervention')->name('users.tech.intervention');


// AJOUTER UNE ENTREPRISE
Route::post('entreprise/inscription', 'App\Http\Controllers\Admin\UsersController@entReg')->name('entreprise.log');

// REDIRECTION VERS LA PAGE Ajouter un beneficiaire a une entreprise
Route::get('entreprise/user', 'App\Http\Controllers\EntrepriseController@getUser')->name('entreprise');

// REDIRECTION VERS LA PAGE RECHERCHE UN EMAIL DE BENEF
Route::get('entreprise/user/email', 'App\Http\Controllers\EntrepriseController@recherchebenef')->name('entreprise.recherche');


// REDIRECTION VERS LA PAGE DE CONNEXION DES ENTREPRISES
Route::get('entreprise/login', 'App\Http\Controllers\EntrepriseController@loginEntreprise')->name('entreprise.login');

//CONNEXION DES ENTREPRISES
Route::post('entreprise/login/home', 'App\Http\Controllers\EntrepriseController@loginEntrepriseHome')->name('entreprise.login.home');

// AJOUTER UN BENEF A UNE ENTREPRISE
Route::get('entreprise/user/ajouter/{benef_id}/{entreprise_id}', 'App\Http\Controllers\EntrepriseController@ajoutbenef')->name('entreprise.lien');
