@extends('layouts.app')
@section('title', 'Películas')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Duración</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($movies as $movie)
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">synopsis</th>
      <th scope="col">director</th>
      <th scope="col">category</th>
      <th scope="col">actors"</th>
      <th scope="col">Género</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        @empty
            <h3>NO HAY DATOS</h3>
        @endforelse
        </tbody>
    </table>
@endsection