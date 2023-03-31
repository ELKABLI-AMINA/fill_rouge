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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Demandes', function () {
    return view('formAgence');
});

Route::get('/Join Us', function () {
    return view('formAgence');
});

require __DIR__ . '/auth.php';


Route::get('/formAgence', [AgenceController::class, 'index'])->name('form.agence');
Route::post('/formAgence', [AgenceController::class, 'store']);


Route::get('/demandsAgence', [AgenceController::class, 'getAllDemande'])->name('demande.agence');
Route::get('/user', [RedirectController::class, 'user'])->name('user');


