@extends("layouts.plantilla")

@section("header")
    @include("layouts.nav")
@endsection

@section("main")
  @include('subvistas.formError')
    
<div class="container">
    <div class="card">
      <div class="card-header">
          {{$alumno->nombre}}
      </div>
      <div class="card-body">
              <form action="{{route('form.store')}}" method="post">
                  {{csrf_field()}}
                <div class="form-row mb-3 mt-3">
                  <div class="col-6">
                      <input type="text" class="form-control" id="nombre" name="nombre" value="{{$alumno->nombre}}" placeholder="Nombre Alumno" >
                  </div>
                  <div class="col-6">
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos Alumno" >
                  </div>
                </div>

                <div class="form-row mb-3 mt-3">
                  <div class="col-4">
                      <input type="text" class="form-control" id="dni" name="dni" placeholder="D.N.I del Alumno" >
                  </div>
                  <div class="col-4">
                      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono del Alumno" >
                  </div>
                  <div class="col-4">
                      <input type="number" class="form-control" id="curso_id" name="curso_id" placeholder="ID curso Contratado" >
                  </div>
                </div>

                <button class="btn btn-success col-12 mb-3 mt-3" type="submit">Guardar</button>

                <a class="btn btn-primary col-12 mb-3 mt-3" href="{{ route('inicio') }}">Volver a la pagina de inicio</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section("footer")
<footer class="bg-dark" style="width: 100%;color:white;">
    <p style="text-align: right;width:100%;margin: 0;padding: 15px;">LaravelCEPI 2020</p>
</footer>

@endsection