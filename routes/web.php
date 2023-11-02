<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ClientController;
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
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/update/{client}', [ClientController::class, 'update_client'])->name('update_client');
Route::get('/delete/{client}', [ClientController::class, 'delete_client'])->name('delete_client');
 Route::post('/update/traitement/{client}',[ClientController::class, 'update_client_traitement'])->name('update_client_traitement');

Route::get('/client', [ClientController::class, 'index']);
Route::post('/create/traitement', [ClientController::class, 'create_client_traitement'])->name('create_client_traitement');
Route::get('/create', [ClientController::class, 'create']);
