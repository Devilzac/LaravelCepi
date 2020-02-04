<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bienvenido extends Controller
{
    public function idioma($idioma = "Español"){
        switch (ucfirst($idioma)){
            case "Frances":
                return view("BienvenidaFrances",["idioma"=>$idioma]);
            break;
            case "Ingles":
                return view("BienvenidaIngles",["idioma"=>$idioma]);
            break;
            case "Catalan":
                return view("BienvenidaCatalan",["idioma"=>$idioma]);
            break;
            case "Italiano":
                return view("BienvenidaItaliano",["idioma"=>$idioma]);
            break;
            case "Español":
                return view("BienvenidaEspañol",["idioma"=>$idioma]);
            break;
            default:
                return view("BienvenidaDesconocido",["idioma"=>$idioma]);
            break;
        }
    }
}
