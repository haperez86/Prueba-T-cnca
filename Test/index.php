<?php
include_once 'header.php';
require 'includes/connect.php';
include_once 'config.php';
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
                <h5>Soluciones Innovadoras</h5>
                <p>Mejoramos la logistica en el transporte!!</p>

            </div>
            <img class="d-block w-100" style="width:350px;height:450px;"
                src="https://images.unsplash.com/photo-1556634202-129a046351c0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                alt="First slide">

        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h5>Inscribe tu vehiculo</h5>
                <p>Aumenta la rentabilidad!!</p>
            </div>
            <img class="d-block w-100" style="width:350px;height:450px;"
                src="https://images.unsplash.com/photo-1515674447568-09bbb507b96c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Second slide">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h5>Registrate como Conductor</h5>
                <p>Nuestros conductores son los mejores!!</p>

            </div>
            <img class="d-block w-100" style="width:350px;height:450px;"
                src="https://images.unsplash.com/photo-1532004252750-b411a84c8a41?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php
include 'includes/footer.php';
?>