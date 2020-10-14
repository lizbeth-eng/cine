 @extends('layouts.app')
 @section('title', 'Peliculas')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('movies.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 <div class="col-sm-10"><h1>Peliculas registradas</h1>
 </div>
 
 

@forelse($movies as $movie)
 <div class="row">
<div class="card col-sm bg-light" style="...">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $movie->name }}</h5>
    <h3 class="card-text">{{ $movie->director }}</h3>
    <p class="card-text">{{ $movie->synopsis }}</p>
    <p class="card-text text-muted">{{ $movie->duration }}</p>
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
