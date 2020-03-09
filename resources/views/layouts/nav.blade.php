<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LaravelCepi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="alumnos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alumnos
        </a>
        <div class="dropdown-menu" aria-labelledby="alumnos">
          <a class="dropdown-item" href="{{route('showAlumnos.create')}}">Altas</a>
          <a class="dropdown-item" href="{{route('buscar-alumno')}}">Consultas</a>
          <a class="dropdown-item" href="#">Modificaciones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('cursos')}}">showCursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('alumnos')}}">showAlumnos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('profes')}}">showProfes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('notas')}}">showNotas</a>
      </li>
    </ul>
  </div>
</nav>