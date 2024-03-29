<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('auth.register');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/', [PagesController::class, 'index'])->name('dashboard');
    Route::delete('/borrar-cuenta', [PagesController::class, 'borrarCuenta'])->name('borrar-cuenta');
    Route::get('/registro-exitoso', [PagesController::class, 'registroExitoso'])->name('registro-exitoso');
    Route::get('cambio-de-pass', [PagesController::class, 'password'])->name('password');
});

