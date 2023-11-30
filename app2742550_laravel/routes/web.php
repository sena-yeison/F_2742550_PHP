<?php

use App\Http\Controllers\ClientsController;
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
Route::get('/', [ClientsController::class,'index'])->name('Clients.list');
Route::get('client/registro', [ClientsController::class, 'create'])->name('Clients.show.register');
Route::get('client/edit/{id}', [ClientsController::class, 'edit'])->name('Client.show.edit');
Route::post('client/create', [ClientsController::class, 'store'])->name('Client.create');
Route::post('client/update/{id}', [ClientsController::class, 'update'])->name('Client.update');
Route::get('client/delete/{id}', [ClientsController::class, 'delete'])->name('Client.show.delete');
Route::post('client/delete/{id}', [ClientsController::class, 'destroy'])->name('Client.delete');
