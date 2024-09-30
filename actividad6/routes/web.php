<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('productos', ProductoController::class);


//correr el servidor
//http://localhost:8000/productos
//
//http://localhost:8000/productos/{id}/edit