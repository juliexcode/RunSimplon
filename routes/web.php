<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::post('users/entreprise', 'UsersController@entReg')->name('entreprise.log');
    Route::post('users', 'UsersController@store')->name('users.store');
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::get('users/create', 'UsersController@create')->name('users.create');
    Route::get('users/dashboard', 'UsersController@dash')->name('users.dash.view');
    Route::get('users/dashboard/listeb', 'UsersController@listutil')->name('users.dash.listutil');
    Route::delete('users/dashboard/listeb/{user}', 'UsersController@delben')->name('users.dash.listutil.destroy');
    Route::get('users/dashboard/listeb/{user}/edit', 'UsersController@editrole')->name('users.dash.listutil.edit');
    Route::put('users/dashboard/listeb/{user}', 'UsersController@assrole')->name('users.dash.listutil.update');
    Route::get('users/dashboard/listetech', 'UsersController@listtech')->name('users.dash.listtech');





    Route::get('users/dashboard/notification', function () {
        return view('dashboard.notification');
    })->name('users.dash.notification');
});

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');


Route::get('/pressionpneu', [App\Http\Controllers\PressionController::class, 'pressionpneu'])->name('pressionpneu');
