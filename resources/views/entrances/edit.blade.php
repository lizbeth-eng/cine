@extends('layouts.app')
@section('content')

    <form action="{{ route('entrances.update', $entrance->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-md">
                <label for="">Agregar entarda:</label>
                <input value="{{ $consumable->name }}" class="form-control" type="text" name="name" id="">
            </div>
            <div class="col-md">
                <label for="">Precio:</label>
                <input value="{{ $consumable->price }}" class="form-control" type="text" name="price" id="">
            </div>
            <div class="col-md">
                <label for="">Cantidad:</label>
                <input value="{{ $consumable->quantity }}" class="form-control" type="number" name="quantity" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>

    </form>

@endsection
