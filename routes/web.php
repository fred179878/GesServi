<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\EmployeController;

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

//Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::resource('services', ServiceController::class);
// Route::resource('personnels', PersonnelController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/personnels', [PersonnelController::class, 'index'])->name('personnes.index');
Route::get('/employes-par-service', [EmployeController::class, 'employesParService'])->name('employes_par_service');

Route::get('/personnels/create', [PersonnelController::class, 'create'])->name('personnels.create');
Route::post('/personnels/store', [PersonnelController::class, 'store'])->name('personnels.store');
Route::get('/personnels/{personnel}/edit', [PersonnelController::class, 'edit'])->name('personnels.edit');
Route::put('/personnels/{personnel}', [PersonnelController::class, 'update'])->name('personnels.update');
