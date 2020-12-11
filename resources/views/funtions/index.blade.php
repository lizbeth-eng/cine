@extends('layouts.app')
 @section('title', 'Funciones')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('funtions.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 <div class="col-sm-10"><h1>Lista de funciones</h1>
 </div>
 </div>
 <div class="btn-group col-4" role="group" aria-label="Basic outlined example">
  <a href = "{{route('funtions.pdf')}}" class="btn btn-outline-dark">PDF</a>
  <a href ="/funtionsXLS" class="btn btn-outline-secondary">XLS</a>
  <a  href ="/funtionsCSV" class="btn btn-outline-dark">CSV</a>
</div>
 <table class="table table-striped">
 <thead>
    <th>ID</th>
    <th>Comienzo</th>
    <th>Final</th>
    <th>Disponible</th>
    <th>Tipo</th>
    <th>Acciones</th>
    </thead>
    <tbody>
  @forelse($funtions as $funtion)
  <tr>
            <td>{{ $funtion->id }}</td>
            <td>{{ $funtion->start }}</td>
            <td>{{ $funtion->end }}</td>
            <td>{{ $funtion->available}}</td>
            <td>{{ $funtion->type}}</td>
            <td>
 
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
