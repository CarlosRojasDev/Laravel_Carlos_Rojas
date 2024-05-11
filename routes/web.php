<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::resource('empleados',EmpleadoController::class);
Route::resource('departamentos',DepartamentoController::class);