<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use app\Http\Controllers\Admin\TechniciensController;

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

    Route::get('users/entreprise', function () {
        return view('registerEntreprise');
    })->name('entreprise');

    Route::post('users/entreprise/log', 'UsersController@entReg')->name('entreprise.log');
    Route::get('users', 'UsersController@index')->name('users.index');
});

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
