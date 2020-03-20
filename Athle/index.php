<?php
session_start();
require "header.php";


?>

    <link rel="stylesheet" href="css/indexmap.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <script src="js/map.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
    <body>
    <h1 class="text-center mt-3">
        Bienvenue sur le site officiel du C.S.Athlétisme Avion
    </h1>
    <div class="container mt-4">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="libs/img/athletic.jpg" class="d-block w-100" alt="slider1">
                </div>
                <div class="carousel-item">
                    <img src="libs/img/chaussure.jpg" class="d-block w-100" alt="slider2">
                </div>
                <div class="carousel-item">
                    <img src="libs/img/pont.jpg" class="d-block w-100" alt="slider3">
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
                <a href="attention.png" download>c'est ici pour le ddl</a><br>
                <a href="https://bases.athle.fr/asp.net/liste.aspx?frmbase=cclubs&frmmode=2&frmespace=&frmtypeclub=M&frmsaison=2019&frmnclub=062085&frmruptures="
                    target="_blank">
                    Classement des clubs</a>
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