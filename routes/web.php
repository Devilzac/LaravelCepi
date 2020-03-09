<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/form/buscar", function(){
    return view("buscaralumno");
})->name("buscar-alumno");
/*
Route::get("/saludo/{idioma?}","Bienvenido@idioma")->where(["idioma"=>"[a-zA-ZÀ-ÿ-ñ]+"]);
Route::get("/inicio/{id?}","DatosController@inicio")->where(["id"=>"[0-9]+"]);
Route::get("/listado/{id?}","DatosController@listado");
Route::get("/fotos","OtrosController@galeria");
*/
Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::resource("/showCursos","CursoController");
Route::resource("/showAlumnos","AlumnoController");
Route::resource("/showProfes","ProfesorController");
Route::resource("/showNotas","NotaController");

Route::get("/showCursos","CursoController@index")->name('cursos');
Route::get("/showAlumnos","AlumnoController@index")->name('alumnos');
Route::get("/showProfes","ProfesorController@index")->name('profes');
Route::get("/showNotas","NotaController@index")->name("notas");


Route::get("/onetoone","ProfesorController@onetoone");
Route::get("/cusoAlumnos","AlumnoController@alumnosCurso");


Route::post("/form/b", "FormularioController@buscaralumno")->name("buscar");
Route::resource("/form", "FormularioController");

/*
Route::get("/showCursos","CursoController@index")->name('cursos');
Route::get("/showAlumnos","AlumnoController@index")->name('alumnos');
Route::get("/showProfes","ProfesorController@index")->name('profes');
Route::get("/showNotas","NotaController@index")->name('notas');
Route::get("/altaCursos","queryController@altaCursos");
Route::get("/altaAlumnos","queryController@altaAlumnos");
Route::get("/altaProfes","queryController@altaProfes");
Route::get("/altaNotas","queryController@altaNotas");

Route::get("/showCursos","queryController@showCursos")->name('cursos');
Route::get("/showAlumnos","queryController@showAlumnos")->name('alumnos');
Route::get("/showProfes","queryController@showProfes")->name('profes');
Route::get("/showNotas","queryController@showNotas")->name('notas');
*/
/*
Route::get('/mensaje', function () {
    return 'Practica con rutas laravel';
});

Route::get('/contacto', function () {
    return 'Pagina para contactos';
});
Route::get('/contacto/{id}', function ($id) {
    return "Mostrando detalles del contacto : {$id}";
})->where('id', '[0-9]{5}');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return " llamada a vista que mostrara esta ruta";
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

Route::get('/contacto/nuevo', function () {
    return 'Contacto nuevo';
});

Route::get('/acercade', function () {
    return 'Pagina para hablar de nosotros';
});

Route::get('/saludo/{nombre}/{apellido}', function ($id, $apellido) {
    return 'Bienvenido, '.$apellido.' '. $id;
});

Route::get('/posts/{post_id}/codigo/{producto_id}', function ($post_id, $producto_id) {
    return "El producto {$producto_id} fue enviado desde el post $post_id";
});


Route::get('/usuario/{nombre}/{ciudad?}', function ($nombre, $ciudad=null) {
    if($ciudad){
        return "Bienvenido $nombre, as dicho que eres de $ciudad";
    }
    return "Bienvenido $nombre, no has indicado de donde eres";
});


Route::get('/salto', function () {
    return redirect()->route('inicio');
});*/