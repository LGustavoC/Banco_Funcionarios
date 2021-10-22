<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFunc extends Model
{
    protected $table='funcionarios';
    //use HasFactory;

    public function relCargo(){
        return $this -> hasOne('App\Models\ModelCargo','id', 'id_cargo');
    }
    
}
