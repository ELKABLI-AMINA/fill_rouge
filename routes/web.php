<?php

use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;


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

Route::get('/redirect', [RedirectController::class, 'redirect']);

Route::get('/', function () { return view('welcome');})->name('/');
Route::get('contact', function () { return view('contact');})->name('contact');
Route::get('about', function () { return view('about');})->name('about');
Route::get('readmore', function () {return view('readmore');})->name('readmore');



Route::middleware('auth')->group(function () {
    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/Join_Us', function () {return view('Agence.formAgence');})->name('joinUs');

require __DIR__ . '/auth.php';


Route::get('/formAgence', [AgenceController::class, 'index'])->name('form.agence');
Route::post('/formAgence', [AgenceController::class, 'store']);



Route::get('/user', [RedirectController::class, 'user'])->name('user');


// ========= ADMIN ROUTES===============
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/demandsAgence', [AgenceController::class, 'getAllDemande'])->name('demande.agence');
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    // Route::get('/Demandes', function () { return view('formAgence');});
});


// ========= OWNER ROUTES===============
Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/editAgence', [AgenceController::class, 'edit'])->name('Agence.edit');
    Route::get('/owner', function () { return view('o-dashboard'); })->name('owner');
});

// ========= USER ROUTES===============
Route::middleware(['auth', 'user'])->group(function () {
});
