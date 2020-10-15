@extends('layouts.app')
@section('title', 'Películas')
@section('content')


<div class="container">


   <table class="table">
    <thead>
        <tr>
            <th scope="col">Comienzo</th>
            <th scope="col">Final</th>
           
        </tr>
        </thead>
        <tbody>
        @forelse($funtions as $funtion)
    <tr>
      <th scope="row">{{$funtion->start}}</th>
      <td>{{$funtion->end}}</td>
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form action="{{ route('funtions.destroy', $funtion->id) }}" method="post">
                            <a class="btn btn-secondary" href="{{ route('funtions.show', $funtion->id) }}">Ver</a>
                            <a class="btn btn-secondary" href="{{ route('funtions.edit', $funtion->id) }}">Editar</a>
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