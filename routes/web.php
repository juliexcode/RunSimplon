<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    // SUPPRIMER
    Route::delete('users/dashboard/listeb/{user}', 'UsersController@delben')->name('users.dash.listutil.destroy');
    // REDIRECTION VERS LA LISTE DES TECHNICIENS
    Route::get('users/dashboard/listetech', 'UsersController@listtech')->name('users.dash.listtech');
    // REDIRECTION VERS LA PAGE DES TECHNICIENS + RECHERCHE UNE MATRICULE
    Route::get('users/technicien/recherche/', 'UsersController@recherche')->name('users.tech.recherche');
    // REDIRECTION VERS LA PAGE DES NOTIFICATION DASHBOARD
    Route::get('users/dashboard/notification', function () {
        return view('dashboard.notification');
    })->name('users.dash.notification');
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
Route::post('entreprise', 'App\Http\Controllers\EntrepriseController@entReg')->name('entreprise.log');
