<?php
session_start();
require "header.php";


?>

<body>
<h1 class="text-center mt-3">
    Bienvenue sur le site officiel du C.S.Athlétisme Avion
</h1>
<div class="container mt-4">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="libs/img/femme.jpg" class="d-block w-100" alt="slider1">
            </div>
            <div class="carousel-item">
                <img src="libs/img/run.jpg" class="d-block w-100" alt="slider2">
            </div>
            <div class="carousel-item">
                <img src="libs/img/start.jpg" class="d-block w-100" alt="slider3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="container">
    <div class="row">
        <div id="textphoto" class="col-12 mt-3">
            <h4>
                Pour toutes les competitions les maillots de club sont obligatoires!.
            </h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.

                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum
                qui dolorem eum fugiat quo voluptas nulla pariatur?

            </p>
        </div>
    </div>

    <div class="row">
        <div id="textsit" class="col-12 h5">Nous situer :
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <div id="map">
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php
require "footer.php"
?>