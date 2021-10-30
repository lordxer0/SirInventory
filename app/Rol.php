<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'Roles';

    public function usuariosRol(){
        return $this->hasMany(User::class,'rol_id','id');
    }

}
