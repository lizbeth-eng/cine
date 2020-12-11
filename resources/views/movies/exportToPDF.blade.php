@extends('layout.layout')
@section('content')
 <div>
 <h1>Lista de peliculas</h1>
 </div>
 
 <table class="table">
 <thead>
 <tr>
 <th>ID</th>
    <th>Nombre</th>
    <th>Director</th>
    <th>Sipnosis</th>
    <th>Duracion</th>
    </thead>
    @foreach ($movies as $movie)
    <tbody>
    <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie-> synopsis}}</td>
            <td>{{ $movie-> duration}}</td>
            <td>
             </tr>
            </tbody>
            @endforeach
             </table>
             

 @endsection