<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{   
    protected  $fillable=["nombre","dificultad","inicio","horas","profe_id"];
}
