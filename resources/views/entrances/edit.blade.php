@extends('layouts.app')
@section('content')

    <form action="{{ route('entrances.update', $entrance->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
         <div class="col-md">
                <label for="">Precio:</label>
                <input value="{{ $entrance->price }}" class="form-control" type="text" name="price" id="">
            </div>
            <div class="col-md">
                <label for="">Hora entrada:</label>
                <input value="{{ $entrance->hourEntrance }}" class="form-control" type="number" name="hourEntrance" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>

    </form>

@endsection
