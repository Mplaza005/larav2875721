<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function create() {

        return view('frm_product');

    }

    public function store(Request $request){

       $producto = new Product();
       $producto->nombre=$request->name;
       $producto->price=$request->price;

       $producto->save();
       return $producto;

    }

}
