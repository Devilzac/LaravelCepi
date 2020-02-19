<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class queryController extends Controller
{
    public function altaCursos() {
        $resultado= DB::table("cursos")->insert([
            ["nombre"=>"HTML", "dificultad"=>1, "horas"=>10,"inicio"=>"2020-01-10","profe_id"=>1],
            ["nombre"=>"JS", "dificultad"=>2, "horas"=>20,"inicio"=>"2020-01-10","profe_id"=>2],
            ["nombre"=>"PHP", "dificultad"=>3, "horas"=>30,"inicio"=>"2020-01-10","profe_id"=>3],
            ["nombre"=>"SQL", "dificultad"=>4, "horas"=>40,"inicio"=>"2020-01-10","profe_id"=>4],
            ["nombre"=>"LARAVEL", "dificultad"=>5, "horas"=>50,"inicio"=>"2020-01-10","profe_id"=>5]
        ]); 
        if(!$resultado){
            echo "no se ha podido realizar el alta Cursos";
        }
        else{
            echo "Alta cursos realizada";
        }
    }
    public function altaAlumnos() {
        $resultado= DB::table("alumnos")->insert([
            ["nombre"=>"pepe", "apellidos"=>"rod1", "dni"=>"47238041A", "telefono"=>"634852571","curso_id"=>1],
            ["nombre"=>"pepa", "apellidos"=>"rod2", "dni"=>"47238042A", "telefono"=>"634852572","curso_id"=>2],
            ["nombre"=>"carlos", "apellidos"=>"rod3", "dni"=>"47238043A", "telefono"=>"634852573","curso_id"=>3],
            ["nombre"=>"raul", "apellidos"=>"rod4", "dni"=>"47238044A", "telefono"=>"634852574","curso_id"=>4],
            ["nombre"=>"raquel", "apellidos"=>"rod5", "dni"=>"47238045A", "telefono"=>"634852575","curso_id"=>5]
        ]); 
        if(!$resultado){
            echo "no se ha podido realizar el alta alumnos";
        }
        else{
            echo "Alta alumnos realizada";
        }
        
    }
    public function altaProfes() {
        
        
        $resultado= DB::table("profes")->insert([
            ["nombre"=>"david", "apellidos"=>"col5", "alumno_id"=>5,"curso_id"=>5],
            ["nombre"=>"edgar", "apellidos"=>"col4", "alumno_id"=>4,"curso_id"=>4],
            ["nombre"=>"anna", "apellidos"=>"col3", "alumno_id"=>3,"curso_id"=>3],
            ["nombre"=>"nuria", "apellidos"=>"col2", "alumno_id"=>2,"curso_id"=>2],
            ["nombre"=>"pepa", "apellidos"=>"col1", "alumno_id"=>1,"curso_id"=>1],
         ]); 
        if(!$resultado){
            echo "no se ha podido realizar el alta profes";
        }
        else{
            echo "Alta profes realizada";
        }
        
    }
    public function altaNotas() {
        
        $resultado= DB::table("notas")->insert([
            ["curso_id"=>1, "alumno_id"=>1, "profe_id"=>5,"nota"=>1.1],
            ["curso_id"=>2, "alumno_id"=>2, "profe_id"=>4,"nota"=>2.2],
            ["curso_id"=>3, "alumno_id"=>3, "profe_id"=>3,"nota"=>3.3],
            ["curso_id"=>4, "alumno_id"=>4, "profe_id"=>2,"nota"=>4.4],
            ["curso_id"=>5, "alumno_id"=>5, "profe_id"=>1,"nota"=>5.5],
        ]); 
        if(!$resultado){
            echo "no se ha podido realizar el alta notas";
        }
        else{
            echo "Alta notas realizada";
        }
        
    }
    
    public function showCursos() {
        $result= DB::table("cursos")->get();
        return view("mostrarcursos", compact("result"));
    }
    public function showAlumnos() {
        $result= DB::table("alumnos")->get();
        return view("mostraralumno", compact("result"));        
    }
    public function showProfes() {
        $result= DB::table("profes")->get();
        return view("mostrarprofes", compact("result"));        
    }
    public function showNotas() {
        $result= DB::table("notas")->get();
        return view("mostrarnotas", compact("result"));        
    }
}
