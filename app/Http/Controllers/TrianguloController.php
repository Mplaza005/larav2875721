<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    //

    public function areaTriangulo($base,$altura){

        $area=($base*$altura)/2;


        return $area;

    }
}
