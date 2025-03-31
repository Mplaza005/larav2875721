<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     //Relacion Uno a Muchos (Inversa) con User
     public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion Uno a Muchos (Inversa) con Categoria
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
