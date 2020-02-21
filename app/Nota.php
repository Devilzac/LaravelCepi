<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{   
    protected  $fillable=["nota","profe_id","alumno_id","curso_id"];
}
