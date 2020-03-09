<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected  $fillable=["nombre","apellidos","dni","telefono","curso_id"];
   
    
}
