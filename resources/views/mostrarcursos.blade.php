@extends("layouts.plantilla")

@section("header")
    @include("layouts.nav")
@endsection

@section("main")
<table border="1" class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Dificultad</th>
            <th scope="col">Inicio</th>
            <th scope="col">Horas</th>
            <th scope="col">Profe ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $curso)
        <tr>
            <td>{{$curso->nombre}}</td>
            <td>{{$curso->dificultad}}</td>
            <td>{{$curso->inicio}}</td>
            <td>{{$curso->horas}}</td>
            <td>{{$curso->profe_id}}</td>
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