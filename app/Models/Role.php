<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
      //Relacion Muchos a Muchos
      public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
