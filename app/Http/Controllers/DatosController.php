<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosController extends Controller
{
    Private $listado = [["codigo"=>0, "descripcion"=> "Acer Aspire 0", "unidades"=>25, "precio"=>"421.26€"],
        ["codigo"=>1, "descripcion"=> "Acer Aspire 1", "unidades"=>215, "precio"=>"521.26€"],
        ["codigo"=>2, "descripcion"=> "Acer Aspire 2", "unidades"=>5, "precio"=>"621.26€"],
        ["codigo"=>3, "descripcion"=> "Acer Aspire 3", "unidades"=>2, "precio"=>"721.26€"],
        ["codigo"=>4, "descripcion"=> "Acer Aspire 4", "unidades"=>55, "precio"=>"821.26€"],
        ["codigo"=>5, "descripcion"=> "Acer Aspire 5", "unidades"=>21, "precio"=>"921.26€"],
        ["codigo"=>6, "descripcion"=> "Acer Aspire 6", "unidades"=>23, "precio"=>"1421.26€"],
        ["codigo"=>7, "descripcion"=> "Acer Aspire 7", "unidades"=>28, "precio"=>"2421.26€"],
        ["codigo"=>8, "descripcion"=> "Acer Aspire 8", "unidades"=>95, "precio"=>"3421.26€"],
        ["codigo"=>9, "descripcion"=> "Acer Aspire 9", "unidades"=>65, "precio"=>"4421.26€"]];
    
    public function inicio($id=null){
        if($id==null){
            return "Error";
        }
            return "Mostrando detalles del cliente: $id a las ". date('H:i:s');
    }
    public function listado($id=null){
        $valor = $this->getListado();
        return $valor;
        if($id==null){
            return view("listado", ["listado"=>$valor]);
        }
        $SoloUnDato = $this->recorrerArrayYdevolverUnoEnConcreto($valor, $id);
        return view("listado", ["listado"=>$SoloUnDato]);
    }
    public function recorrerArrayYdevolverUnoEnConcreto($datos, $id){
        foreach ($datos as $dato){ 
            if($dato["codigo"]== $id){
                return $dato;
            }
        }
    }
    public function getListado(){
        return $this->listado;
    }
}
