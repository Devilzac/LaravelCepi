@extends("layouts.plantilla")

@section("header")
    @include("layouts.nav")
@endsection

@section("main")
    @include('subvistas.formError')
    
<div class="container">
    <div class="card">
      <div class="card-header">
        Buscar Alumno
      </div>
      <div class="card-body">
              <form action="{{route('buscar')}}" method="post">
                  {{csrf_field()}}
                    <div class="form-row mb-12 mt-12">
                      <div class="col-6">
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del alumno" >
                      </div>
                      <div class="col-6">
                          <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos del alumno" >
                      </div>
                    </div>

                <button class="btn btn-success col-12 mb-3 mt-3" type="submit">Buscar</button>

                <a class="btn btn-primary col-12 mb-3 mt-3" href="{{ route('inicio') }}">Volver al listado</a>
            </form>
        </div>
    </div>
</div>
@endsection