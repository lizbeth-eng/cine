 @extends('layouts.app')
 @section('title', 'Peliculas')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('movies.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 
 </div>
 <h1>Listado de peliculas </h1>
 </div>
 <div class="btn-group col-4" role="group" aria-label="Basic outlined example">
  <a href = "{{route('movies.pdf')}}" class="btn btn-outline-dark">PDF</a>
  <a href ="/moviesXLS" class="btn btn-outline-secondary">XLS</a>
  <a  href ="/moviesCSV" class="btn btn-outline-dark">CSV</a>
  <a href = "{{route('movies.grafica')}}" class="btn btn-outline-dark">Graficar</a>

</div>
 <table class="table table-striped">
 <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Director</th>
    <th>Sipnosis</th>
    <th>Duracion</th>
    <th>Acciones</th>
    </thead>
    <tbody>

@forelse($movies as $movie)
<tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie-> synopsis}}</td>
            <td>{{ $movie-> duration}}</td>
            <td>

    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
        <a class="btn btn-info" href="{{ route('movies.show', $movie->id) }}">Ver</a>
        <a class="btn btn-info" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>

    
  </div>
</div>
</div>
<br>
@empty
    <div><h3>No hay registro de peliculas</h3></div>
@endforelse

{{ $movies->links() }}
@endsection
