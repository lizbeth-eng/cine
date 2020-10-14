@extends('layouts.app')

@section('title', 'Agregar funcion')

@section('content')


    <div class="row">
        <div class="col-sm-10"><h1>Agregar funcion</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('funtions.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <div class="jumbotron">
        <form method="post" action="{{ route('funtions.store') }}">
            @csrf
            <div>
                <label for="">Comienzo:</label>
                <textarea class="form-control" name="start" id="" cols="30" rows="5"></textarea>
            </div>
            <div>
                <label for="">Final:</label>
                <input class="form-control" type="text" name="end" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Disponibilidad:</label>
                <select class="form-control" name="available" id="" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>
            <div>
                <label for="">Tipo:</label>
                <select class="form-control" name="type" id="" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Mañana</option>
                    <option value="2">Tarde</option>
                    <option value="3">Noche </option>
            </div>

            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection