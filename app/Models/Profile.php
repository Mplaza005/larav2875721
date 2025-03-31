<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Relacion uno a uno con User
    public function user()
    {
       return $this->belongsTo('App\Models\User');//metodo de laravel
    }
}
