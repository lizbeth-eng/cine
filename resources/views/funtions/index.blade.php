@extends('layouts.app')
 @section('title', 'Funciones')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('funtions.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 <div class="col-sm-10"><h1>Funciones registradas</h1>
 </div>
 
  @forelse($funtions as $funtion)
 <div class="row">
<div class="card col-sm bg-light" style="...">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $funtion->start }}</h5>
    <h3 class="card-text">{{ $funtion->end }}</h3>
    <p class="card-text">{{ $funtion->available }}</p>
    <p class="card-text text-muted">{{ $funtion->type }}</p>
    <form action="{{ route('funtions.destroy', $funtion->id) }}" method="post">
        <a class="btn btn-info" href="{{ route('funtions.show', $funtion->id) }}">Ver</a>
        <a class="btn btn-info" href="{{ route('funtions.edit', $funtion->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
</div>
</div>
<br>
@empty
    <div><h3>No hay registro de Funciones</h3></div>
@endforelse
{{$funtions->links() }}
@endsection
