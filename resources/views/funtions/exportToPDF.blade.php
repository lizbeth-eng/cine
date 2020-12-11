@extends('layout.layout')
@section('content')
 <div>
 <h1>Lista de funciones</h1>
 </div>
 
 <table class="table">
 <thead>
 <tr>
 <th>ID</th>
    <th>Comienzo</th>
    <th>Final</th>
    <th>Disponible</th>
    <th>Tipo</th>
    <th>Acciones</th>
    </thead>
    @forelse($funtions as $funtion)
    <tbody>
    
  <tr>
            <td>{{ $funtion->id }}</td>
            <td>{{ $funtion->start }}</td>
            <td>{{ $funtion->end }}</td>
            <td>{{ $funtion->available}}</td>
            <td>{{ $funtion->type}}</td>
            <td>
            </tr>
            </tbody>
            @endforeach
             </table>
             

 @endsection