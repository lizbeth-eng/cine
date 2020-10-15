@extends('layouts.app')
@section('title', 'Películas')
@section('content')


<div class="container">


   <table class="table">
    <thead>
        <tr>
            <th scope="col">Sillas</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Capacidad</th>
        </tr>
        </thead>
        <tbody>
        @forelse($rooms as $room)
    <tr>
      <th scope="row">{{$room->chairs}}</th>
      <td>{{$room->location}}</td>
      <td>{{$room->capacity}}</td>
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form action="{{ route('movies.destroy', $room->id) }}" method="post">
                            <a class="btn btn-secondary" href="{{ route('rooms.show', $room->id) }}">Ver</a>
                            <a class="btn btn-secondary" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
    </td>
    </tr>
  
        @empty
            <h3>NO HAY DATOS</h3>
        @endforelse
        </tbody>
    </table>
@endsection
 </div>