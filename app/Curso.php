<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{   
    protected  $fillable=["nombre","dificultad","inicio","horas","profe_id"];
    public function profe() {
        return $this->belongsTo("App\Profesor", "curso_id");        
    } 
    public function alumnos() {
        return $this->belongsToMany("App\Alumno", "curso_id");        
    }
}
