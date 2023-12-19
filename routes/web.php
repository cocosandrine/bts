<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ClientController;
use App\Http\controllers\AbonneController;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\FactureController;
use App\Http\controllers\ServiceController;
use Illuminate\Http\Request;

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

Route::middleware("auth")->group(function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('clients', ClientController::class);
Route::resource('abonnements', AbonneController::class);
Route::resource('services', ServiceController::class);
Route::resource('factures',FactureController::class);



Route::get('clt/all', [ClientController::class, 'search'])->name('search.clt');
Route::get('ab/all', [AbonneController::class, 'search'])->name('search.ab');
Route::get('ser/all', [AbonneController::class, 'search'])->name('search.ser');

});



Route::get('login',[authcontroller::class, 'login'])->name('login');

Route::post('login', [authcontroller::class,'dologin'])->name("do-login");
Route::post('logout', [authcontroller::class,'logout'])->name("logout");

Route::get('/liste', 'ListeController@index')->name('liste');


