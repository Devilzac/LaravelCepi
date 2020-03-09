<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{   
    protected $table = "profes";
    protected  $fillable=["nombre","apellidos","alumno_id","curso_id"];
    public function curso() {
        return $this->hasOne("App\Curso","profe_id");
    }
}
