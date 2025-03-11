<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/formularioProducto',[ProductController::class,'create']);
Route::post('/crearProducto',[ProductController::class,'store'])->name('product.store');








Route::get('/areacirculo/{radio}',[EjercicioController::class,'areaCirculo']);
Route::get('/areatriangulo/{base}/{altura}',[TrianguloController::class,'areaTriangulo']);

Route::get('/cuadratica/{a}/{b}/{c}',[TallerController::class,'calcularCuadratica']);
Route::get('/primo/{numero}',[TallerController::class,'calcularPrimo']);
