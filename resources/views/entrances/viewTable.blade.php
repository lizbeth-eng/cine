@extends('layouts.app')
@section('title', 'Películas')
@section('content')


<div class="container">


   <table class="table">
    <thead>
        <tr>
            <th scope="col">Precio</th>
            <th scope="col">Hora de entrada</th>
           
        </tr>
        </thead>
        <tbody>
        @forelse($entrances as $entrance)
    <tr>
      <th scope="row">{{$entrance->price}}</th>
      <td>{{$entrance->hourEntrance}}</td>
      
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                            <a class="btn btn-secondary" href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
                            <a class="btn btn-secondary" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
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