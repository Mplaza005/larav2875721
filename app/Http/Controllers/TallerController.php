<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    //

    public function home(){

        return view('frm_product');

    }


    public function calcularPrimo(){

        return "hola desde primo...";

    }


}
