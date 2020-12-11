@extends('layout.layout')
@section('content')
 <div>
 <h1>Lista de consumibles</h1>
 </div>
 @foreach ($consumables as $consumable)
 <table class="table">
 <thead>
 <tr>
 <th>ID</th>
    <th>Artículo</th>
    <th>Precio</th>
    <th>Cantidad</th>
     </tr>
    </thead>
    <tbody>
    <tr>
    <td>{{ $consumable->id }}</td>
            <td>{{ $consumable->name }}</td>
            <td>{{ $consumable->price }}</td>
            <td>{{ $consumable->quantity }}</td>
            </tr>
            </tbody>
             </table>
             @endforeach

 @endsection