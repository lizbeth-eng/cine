@extends('layouts.app')


<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
        @include('layouts.carousel')
    </div>



    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">After: En mil pedazos</h3>

                    <p class="mb-auto">Ha pasado el tiempo, y Hardin todavía no se sabe si es realmente el chico profundo y reflexivo del que Tessa se enamoró...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/4.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Mulán (2020)</h3>

                    <p class="mb-auto">Cuando el emperador de China lanza un decreto de que un hombre por familia debe
                        servir al Ejército Imperial ...</p>
                    <a href="{{ url('/movies') }}" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/5.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>
    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Los Nuevos Mutantes</h3>

                    <p class="mb-auto">Los cinco jóvenes mutantes Wolfsbane (Maisie Williams), Magik (Anya Taylor-Joy), Cannonball (Charlie Heaton), Sunspot (Henry Zaga) y Mirage (Blu Hunt), descubren sus habilidades mientras están recluidos en ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/6.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Estación zombie 2: Peninsula</h3>

                    <p class="mb-auto">Después de que la infección que se extendió hace 4 años, solo algunas partes de Corea del Sur permanecen resguardadas, aunque la Península de Busan ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>
    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Tenet</h3>

                    <p class="mb-auto">Una acción épica que gira en torno al espionaje internacional, los viajes en el tiempo y la evolución, en la que un agente secreto debe prevenir la Tercera Guerra Mundial ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/8.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">¡Scooby!</h3>

                    <p class="mb-auto">Scooby and the gang face their most challenging mystery ever: a plot to unleash the ghost dog Cerberus upon the world ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/9.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>


    <!-- Agregar JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
