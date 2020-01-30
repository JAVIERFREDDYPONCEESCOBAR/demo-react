<?php

namespace App\Modelo\admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('App\Modelo\admin\User');
    }
}
