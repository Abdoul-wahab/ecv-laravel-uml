<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ControleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\VehiculeController;
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
    return view('hero');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/vehicule', function () {
    return view('vehicule');
});

Route::get('/create-vehicule', function () {
    return view('vehicule.create-vehicule');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contrat-details/{contrat}', [ContratController::class, 'show'])->name('contrat-details');
Route::get('/contrat-create', [ContratController::class, 'create'])->name('contrat-create');
Route::get('/edit-contrat/{contrat}', [ContratController::class, 'edit'])->name('edit-contrat');
Route::get('/update-contrat', [ContratController::class, 'update'])->name('update-contrat');
Route::get('/contrats', [ContratController::class, 'index'])->name('contrats.index');
Route::post('/contrat-store', [ContratController::class, 'store'])->name('contrat-store');

Route::get('/controle-details/{controle}', [ControleController::class, 'show'])->name('controle-details');
Route::get('/controle-create', [ControleController::class, 'create'])->name('controle-create');
Route::get('/edit-controle/{controle}', [ControleController::class, 'edit'])->name('edit-controle');
Route::get('/update-controle', [ControleController::class, 'update'])->name('update-controle');
Route::get('/controles', [ControleController::class, 'index'])->name('controles.index');
Route::post('/controle-store', [ControleController::class, 'store'])->name('controle-store');

Route::get('/employe-details/{employe}', [EmployeController::class, 'show'])->name('employe-details');
Route::get('/employe-create', [EmployeController::class, 'create'])->name('employe-create');
Route::get('/edit-employe/{employe}', [EmployeController::class, 'edit'])->name('edit-employe');
Route::get('/update-employe', [EmployeController::class, 'update'])->name('update-employe');
Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
Route::post('/employe-store', [EmployeController::class, 'store'])->name('employe-store');

Route::get('/location-details/{employe}', [LocationController::class, 'show'])->name('location-details');
Route::get('/location-create', [LocationController::class, 'create'])->name('location-create');
Route::get('/edit-location/{id}', [LocationController::class, 'edit'])->name('edit-location');
Route::get('/update-location', [LocationController::class, 'update'])->name('update-location');
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::post('/location-store', [LocationController::class, 'store'])->name('location-store');

Route::get('/vehicule-details/{uuid}', [VehiculeController::class, 'show'])->name('vehicule-details');
Route::get('/vehicule-create', [VehiculeController::class, 'create'])->name('vehicule-create');
Route::get('/edit-vehicule/{uuid}', [VehiculeController::class, 'edit'])->name('edit-vehicule');
Route::get('/update-vehicule', [VehiculeController::class, 'update'])->name('update-vehicule');
Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules.index');
Route::post('/vehicule-store', [VehiculeController::class, 'store'])->name('vehicule-store');

