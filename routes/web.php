<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ReservationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/redirect', [RedirectController::class, 'redirect'])->name('redirect');

Route::get('/', [VoyageController::class, 'show'])->name('/');
Route::get('contact', function () { return view('contact');})->name('contact');
Route::get('about', function () { return view('about');})->name('about');
Route::get('/voyage/{slug}', [VoyageController::class, 'showVoyage'])->name('readmore');
Route::get('/voyages/{id_voyage}/readmore',  [VoyageController::class, 'showReadMore']);
Route::get('/voyages/{id_voyage}/Soumettre-la-commande',  [VoyageController::class, 'showReservationForm'])->name('soumettre.commande');
Route::post('/voyages/{id_voyage}/Soumettre-la-commande',  [ReservationController::class, 'store']);

Route::get('/voyages/{id}/formVote', [VoteController::class, 'index'])->name('vote');
Route::post('/formVote/{id_voyage}', [VoteController::class, 'noterVoyage'])->name('store.vote');









Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/registerUser', [UserController::class, 'register'])->name('registerUser');
Route::get('/login', [UserController::class, 'show'])->name('login');
Route::post('/loginUser', [UserController::class, 'login'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/formAgence', [AgenceController::class, 'index'])->name('form.agence');
Route::post('/formAgence', [AgenceController::class, 'store']);
Route::get('/user', [RedirectController::class, 'user'])->name('user');


// ========= ADMIN ROUTES===============
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/demandsAgence', [AgenceController::class, 'getAllDemande'])->name('demande.agence');
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/AllAgencies', [AgenceController::class, 'show'])->name('AllAgencies');
    Route::delete('/deleteAgence/{slug}', [AgenceController::class, 'delete'])->name('Agence.delete');

    Route::get('/agence/{slug}', [AgenceController::class, 'showAgence'])->name('show.agence');
});


// ========= OWNER ROUTES===============
Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/editAgence/{slug}', [AgenceController::class, 'edit'])->name('Agence.edit');
    Route::put('/updateAgence/{slug}', [AgenceController::class, 'update'])->name('Agence.update');
    Route::get('/owner', function () { return view('o-dashboard');})->name('owner');
    Route::get('/AllAgencies', [AgenceController::class, 'show'])->name('AllAgencies');
    Route::get('/agence/{slug}', [AgenceController::class, 'showAgence'])->name('show.agence');
    Route::delete('/deleteAgence/{slug}', [AgenceController::class, 'delete'])->name('Agence.delete');

    Route::get('/formVoyage', [VoyageController::class, 'index'])->name('create.voyage');
    Route::get('/ManageVoyage', [VoyageController::class, 'ManageVoyage'])->name('manage.voyage');
    Route::post('/formVoyage', [VoyageController::class, 'store']);
    Route::get('/editVoyage/{slug}', [VoyageController::class, 'edit'])->name('voyage.edit');
    Route::put('/updateVoyage/{slug}', [VoyageController::class, 'update'])->name('voyage.update');
    Route::delete('/deletevoyage/{slug}', [VoyageController::class, 'delete'])->name('voyage.delete');
  
});

// ========= USER ROUTES===============
Route::middleware(['auth', 'user'])->group(function () {
});
