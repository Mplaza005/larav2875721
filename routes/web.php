<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PostController;



// Route::get('/formularioProducto',[ProductController::class,'create']);
 //Route::post('/crearProducto',[ProductController::class,'store'])->name('product.store');

Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::put('category/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('curso/{category}/editar',[CategoryController::class,'edit'])->name('category.edit');


Route::get('pets', [PetController::class, 'index'])->name('pet.index');
Route::get('pet/create', [PetController::class, 'create'])->name('pet.create');
Route::post('pet/store', [PetController::class, 'store'])->name('pet.store');
