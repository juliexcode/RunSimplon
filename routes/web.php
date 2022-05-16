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
    Route::resource('users', 'UsersController');
    Route::post('users', 'UsersController@entReg')->name('entreprise.log');
    Route::post('users', 'UsersController@store')->name('users.store');
    Route::get('users', 'UsersController@index')->name('users.index');


    Route::get('users/notification', function () {
        return view('dashboard.notification');
    })->name('users.notification');
});

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
