@extends('layouts.app')
 @section('title', 'Entradas')
 @section('content')
<div class="rom">
<div class="col-sm-2">
 <a href="{{route('entrances.create') }}">

 <button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
  <div class="col-6">
 <div class="col-sm-10">
 <h1>Listado de Entradas</h1>
 </div>
 <div class="btn-group col-4" role="group" aria-label="Basic outlined example">
  <a href = "{{route('entrances.pdf')}}" class="btn btn-outline-dark">PDF</a>
  <a href ="/entrancesXLS" class="btn btn-outline-secondary">XLS</a>
  <a  href ="/entrancesCSV" class="btn btn-outline-dark">CSV</a>
</div>
 <table class="table table-striped">
 <thead>
    <th>ID</th>
    <th>Precio</th>
    <th>Hora de entrada</th>
    <th>Acciones</th>
    </thead>
    <tbody>

 @forelse($entrances as $entrance)
 <tr>
            <td>{{ $entrance->id }}</td>
            <td>{{ $entrance->price }}</td>
            <td>{{ $entrance->hourEntrance }}</td>
            <td>
 

    <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
        <a class="btn btn-info" href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
        <a class="btn btn-info" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>

    
  </div>
</div>
</div>
<br>
@empty
    <div><h3>No hay registro de entradas</h3></div>
@endforelse

{{ $entrances->links() }}
@endsection
