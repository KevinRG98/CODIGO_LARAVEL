<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; // Agrega este use statement
use App\Http\Controllers\Servicios2Controller; // Agrega este use statement

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('servicios/{servicio}', [ServiciosController::class, 'show'])->name('servicios.show');

Route::view('contacto','contacto')->name('contacto');

Route::resource('servicios', ServiciosController::class);
