<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    //

    public function areaCirculo($radio){

        // return "hola desde area circulo..";

        return 3.14*($radio*$radio);

    }



}
