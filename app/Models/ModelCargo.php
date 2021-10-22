<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCargo extends Model
{
    protected $table='cargos';

    public function relFunc(){
        return $this -> hasMany('App\Models\ModelFunc','id_cargo');
    }
    
    //use HasFactory;
}

