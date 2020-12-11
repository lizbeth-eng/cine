@extends('layouts.app')
 @section('title', 'Salas')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('rooms.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 <div class="col-sm-10"><h1>Lista de salas</h1>
</div>
 <div class="btn-group col-4" role="group" aria-label="Basic outlined example">
  <a href = "{{route('rooms.pdf')}}" class="btn btn-outline-dark">PDF</a>
  <a href ="/roomsXLS" class="btn btn-outline-secondary">XLS</a>
  <a href ="/roomsCSV" class="btn btn-outline-dark">CSV</a>
</div>
 </div>
 <table class="table table-striped">
 <thead>
    <th>ID</th>
    <th>Sillas</th>
    <th>Ubicación</th>
    <th>Localización</th>
    <th>Acciones</th>
    </thead>
    <tbody>
 @forelse($rooms as $room)
<tr>
            <td>{{ $room->id }}</td>
            <td>{{ $room-> chairs}}</td>
            <td>{{ $room-> location}}</td>
            <td>{{ $room->capacity }}</td>
            <td>
 
    <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
        <a class="btn btn-info" href="{{ route('rooms.show', $room->id) }}">Ver</a>
        <a class="btn btn-info" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
</div>
</div>
<br>
@empty
    <div><h3>No hay registro de salas</h3></div>
@endforelse

{{ $rooms->links() }}
@endsection
