<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ClientController;
use App\Http\controllers\AbonneController;
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

/*route client*/
Route::get('/update/{client}', [ClientController::class, 'update_client'])->name('update_client');
Route::get('/delete/{client}', [ClientController::class, 'delete_client'])->name('delete_client');
 Route::post('/update/traitement/{client}',[ClientController::class, 'update_client_traitement'])->name('update_client_traitement');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::post('/create/traitement', [ClientController::class, 'create_client_traitement'])->name('create_client_traitement');
Route::get('/create-client', [ClientController::class, 'create'])->name('create-client'); /*forme*/


/*route abonnement*/
Route::get('/formabone', [AbonneController::class, 'formabone']);
Route::get('/listeabone', [AbonneController::class, 'listeabone'])->name('abonnement');
Route::get('/update', [AbonneController::class, 'liste_traitement'])->name('liste_traitement');


/*route recherche client*/
Route::get('/search', [ClientController::class, 'search'])->name('search_client');

Route::get('/rech', [AbonneController::class, 'rech'])->name('rech_abonnement');
Route::post('/updateabonne{abonnement}',[ClientController::class, 'update_abonnement_traitement'])->name('update_abonnement_traitement');
Route::get('/update/{abonnement}', [ClientController::class, 'update_abonnement'])->name('update_abonnement');



Route::redirect('/', '/dashboard-general-dashboard');

// Dashboard
Route::get('/dashboard-general-dashboard', function () {
    return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
});
Route::get('/dashboard-ecommerce-dashboard', function () {
    return view('pages.dashboard-ecommerce-dashboard', ['type_menu' => 'dashboard']);
});




