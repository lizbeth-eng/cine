@extends('layout.layout')
@section('content')
 <div>
 <h1>Lista de entradas</h1>
 </div>
 
 <table class="table">
 <thead>
 <tr>
    <th>ID</th>
    <th>Precio</th>
    <th>Hora de entrada</th>
     </tr>
    </thead>
    @foreach ($entrances as $entrance)
    <tbody>
    <tr>
           <td>{{ $entrance->id }}</td>
            <td>{{ $entrance->price }}</td>
            <td>{{ $entrance->hourEntrance }}</td>
            </tr>
            </tbody>
            @endforeach
             </table>
             

 @endsection
