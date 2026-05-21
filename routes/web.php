<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DispositivoController;


Route::resource('clientes', ClienteController::class);
Route::resource('dispositivos', DispositivoController::class);