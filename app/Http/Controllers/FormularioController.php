<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("altasalumnos");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nombre"=>"required",
            "apellidos"=>"required",
            "dni"=>"required|regex:/^[0-9]{8,8}[A-Za-z]$/i",
            "telefono"=>"required|numeric",
            "curso_id"=>"required|numeric"
        ]);
        $d=Alumno::create($request->all());
        return redirect()->route("inicio")->with("todook","Alumno añadido correctamente");
    }

    public function buscaralumno (Request $request){
        $result = Alumno::where("nombre",$request->nombre)->where("apellidos",$request->apellidos)->get();
        return view("mostraralumno", compact("result"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$result = Alumno::find($id);
      //  return view("mostraralumno", compact("result"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "update";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        return redirect()->route('alumnos');
    }
}
