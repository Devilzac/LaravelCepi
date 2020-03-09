@extends("layouts.plantilla")

@section("header")
    @yield("layouts.nav")
@endsection

@section("main")
   <table border="1" class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nombre Profesor</th>
            <th scope="col">Nombre curso</th>
            <th scope="col">Dificultad</th>
            <th scope="col">Horas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $curso)
        <tr>
            <td>{{$profe->nombre}}</td>
            <td>{{$curso->nombre}}</td>
            <td>{{$curso->dificultad}}</td>
            <td>{{$curso->horas}}</td>
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