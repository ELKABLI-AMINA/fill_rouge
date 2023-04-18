<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\QRcodeController;

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
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contactStore', [ContactController::class, 'store'])->name('contact-store');
Route::get('about', function () { return view('about');})->name('about');
Route::get('/voyage/{slug}', [VoyageController::class, 'showVoyage'])->name('readmore');


Route::get('/voyages/{id}/formVote', [VoteController::class, 'index'])->name('vote');
Route::post('/formVote/{id_voyage}', [VoteController::class, 'noterVoyage'])->name('store.vote');

Route::get('/paiement', function () { return view('paiement');})->name('paiement');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('submit-contact');
Route::get('/viresement', function () { return view('viresement');})->name('viresement');
Route::get('/espece', function () { return view('espece');})->name('espece');

Route::get('payment-form', [StripeController::class, 'form'])->name('form.payment');
Route::post('make/payment', [StripeController::class, 'makePayment'])->name('make.payment');

Route::get('/qrcode', [QRCodeController::class, 'generateQRCode']);


Route::get('/demandes/{id}/action/{act}',[UserController::class, 'action']);










Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/registerUser', [UserController::class, 'register'])->name('registerUser');
Route::get('/login', [UserController::class, 'show'])->name('login');
Route::post('/loginUser', [UserController::class, 'login'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/EditProfil',[UserController::class, 'edit'])->name('edit.profil');
Route::PUT('/profil', [UserController::class, 'update'])->name('update-profile');
Route::get('/message',[ContactController::class, 'show'])->name('message');


Route::get('/formAgence', [AgenceController::class, 'index'])->name('form.agence');
Route::post('/formAgence', [AgenceController::class, 'store']);



// ========= ADMIN ROUTES===============
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/demandsAgence', [AgenceController::class, 'getAllDemande'])->name('demande.agence');
    Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('dashboard');
    Route::get('/AllAgencies', [AgenceController::class, 'show'])->name('AllAgencies');
    Route::delete('/deleteAgence/{slug}', [AgenceController::class, 'delete'])->name('Agence.delete');
});


// ========= OWNER ROUTES===============
Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/editAgence/{slug}', [AgenceController::class, 'edit'])->name('Agence.edit');
    Route::put('/updateAgence/{slug}', [AgenceController::class, 'update'])->name('Agence.update');
    Route::get('/owner', [UserController::class, 'viewODashboard'])->name('owner');


    Route::get('/formVoyage', [VoyageController::class, 'index'])->name('create.voyage');
    Route::get('/AllVoyage', [VoyageController::class, 'AllVoyage'])->name('AllVoyage');
    Route::post('/formVoyage', [VoyageController::class, 'store']);
    Route::get('/editVoyage/{slug}', [VoyageController::class, 'edit'])->name('voyage.edit');
    Route::put('/updateVoyage/{slug}', [VoyageController::class, 'update'])->name('voyage.update');
    Route::delete('/deletevoyage/{slug}', [VoyageController::class, 'delete'])->name('voyage.delete');


    Route::get('/agence/{slug}', [AgenceController::class, 'showAgence'])->name('show-agence');
});

// ========= USER ROUTES===============
Route::middleware(['auth', 'user'])->group(function () {
    Route::post('/voyages/{id_voyage}/Soumettre-la-commande',  [ReservationController::class, 'store']);
    Route::get('/voyages/{id_voyage}/formReservation',  [ReservationController::class, 'showReservationForm'])->name('form.reservation');
});
