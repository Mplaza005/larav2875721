<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "hola mundo";

   // return view('saludo');
});


Route::get('/saludarpepe', function () {

    return "hola pepe";

   // return view('saludo');
});
