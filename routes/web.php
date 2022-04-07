<?php

use App\Http\Controllers\invokeController;
use App\Http\Controllers\metodosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', invokeController::class)->name('Login');

Route::get('registro', [metodosController::class,'registros'])->name('Registros');

Route::middleware(['auth:sanctum', 'verified'])->get('usuarios',[metodosController::class,'usuarios'])->name('Usuarios');

Route::get('/dashboard', [metodosController::class,'dashboard'])->name('dashboard');

Route::get('matematicas',[metodosController::class,'matematicas'])->name('matematicas');

Route::post('matematicas',[metodosController::class,'store'])->name('matematicas.rmate');
/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/