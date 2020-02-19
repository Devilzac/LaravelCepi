@extends("layouts.plantilla")

@section("header")
    @include("layouts.nav")
@endsection

@section("main")
  <table border="1" class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">DNI</th>
            <th scope="col">Telefono</th>
            <th scope="col">Curso ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $alumno)
        <tr>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidos}}</td>
            <td>{{$alumno->dni}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>{{$alumno->curso_id}}</td>
        </tr>
        @endforeach
       
    </tbody>
</table>
@endsection

@section("footer")
<footer class="bg-dark" style="width: 100%;color:white;">
    <p style="text-align: right;width:100%;margin: 0;padding: 15px;">LaravelCEPI 2020</p>
</footer>

@endsection