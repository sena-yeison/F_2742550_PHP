<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployesController;
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


// Rutas para el modulo de clientes
Route::get('/', function(){
    return view('welcome');
})->name('inicio');



// Rutas de Clientes
Route::get('/clients', [ClientsController::class,'index'])->name('Clients.list');
Route::get('client/register', [ClientsController::class, 'create'])->name('Clients.show.register');
Route::get('client/edit/{id}', [ClientsController::class, 'edit'])->name('Client.show.edit');
Route::post('client/create', [ClientsController::class, 'store'])->name('Client.create');
Route::post('client/update/{id}', [ClientsController::class, 'update'])->name('Client.update');
Route::get('/Client/remove/{id}', [ClientsController::class, 'remove'])->name('Client.show.delete');
Route::post('/Client/remove/{id}', [ClientsController::class, 'destroy'])->name('Client.delete');




// Rutas para Compañias
Route::get('/companies', [CompanyController::class,'index'])->name('Company.list');
Route::get('company/register', [CompanyController::class, 'create'])->name('Company.show.register');
Route::post('company/register', [CompanyController::class, 'store'])->name('Company.register');




// Rutas para Compañias
Route::get('/Enmployees', [EmployesController::class,'index'])->name('Employes.list');
Route::get('Enmployees/register', [EmployesController::class, 'create'])->name('Employes.show.register');
Route::post('Enmployees/register', [EmployesController::class, 'store'])->name('Employes.register');