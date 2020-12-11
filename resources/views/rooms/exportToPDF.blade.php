@extends('layout.layout')
@section('content')
 <div>
 <h1>Lista de salas</h1>
 </div>

 <table class="table">
 <thead>
 <tr>
 <thead>
    <th>ID</th>
    <th>Sillas</th>
    <th>Ubicación</th>
    <th>Localización</th>
    
    </thead>
    @foreach ($rooms as $room)
    <tbody>

    <tr>
            <td>{{ $room->id }}</td>
            <td>{{ $room-> chairs}}</td>
            <td>{{ $room-> location}}</td>
            <td>{{ $room->capacity }}</td>
            <td>
            </tr>
            </tbody>
            @endforeach
             </table>
             

 @endsection