<div>

<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


<div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/1.jpg') }}" style="height: 768px">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Civil war.</h1>
                    <p>“Captain America: Civil War” continúa la historia de “Avengers: Age of Ultron”, con Steve Rogers liderando un nuevo equipo de Vengadores en su esfuerzo por proteger a la humanidad. Tras otro incidente internacional relacionado con los Vengadores que ocasiona daños colaterales, la presión política fuerza a crear un sistema de registro y un cuerpo gubernamental para determinar cuándo se requiere los servicios del equipo. El nuevo status quo divide a los Vengadores mientras intentan salvar al mundo de un nuevo y perverso villano.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Compra tu entrada</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/2.jpg') }}" alt="" style="height: 768px">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The Avengers (Los vengadores)</h1>
                    <p>Cuando un enemigo inesperado surge como una gran amenaza para la seguridad mundial, Nick Fury, director de la Agencia SHIELD, decide reclutar a un equipo para salvar al mundo de un desastre casi seguro. Adaptación del cómic de Marvel “Los Vengadores”, el legendario grupo de superhéroes formado por Ironman, Hulk, Thor y el Capitán América entre otros..</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/3.jpg') }}" style="height: 768px">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Iron Man</h1>
                    <p>Tony Stark, playboy multimillonario, es el dueño de Stark Industries, una importante empresa de armamento. Unos terroristas le secuestran y torturan para que fabrique para ellos un misil devastador. En vez de eso decide que su empresa dejará de fabricar armas, la deja en manos de Obadiah Stane, su hombre de confianza y él se dedica a construir una potente armadura. Pero Stane le traiciona y sigue fabricando armas.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</div>
