<?php
session_start();
require "header.php"
?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <script src="src/js/maps.js"></script>
<!--    <script src="pointeurcarte.php"></script>-->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
    <body>

    <div class="container">
        <h1 class="text-center mt-3 mb-3">Bienvenue sur le site de Immobilette</h1>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/slide1.jpg" class="d-block w-100" alt="slider1">
                </div>
                <div class="carousel-item">
                    <img src="src/img/slide2.jpg" class="d-block w-100" alt="slider2">
                </div>
                <div class="carousel-item">
                    <img src="src/img/slide3.jpg" class="d-block w-100" alt="slider3">
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



    <div class="row">
        <div id="textphoto" class="col-12 mt-3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit, sed quia non numquam eius modi tempora
                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam,
                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
                velit esse quam nihil molestiae consequatur, vel illum
                qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
        </div>
    </div>

    <div class="row">
        <div id="textsit" class="col-12 text-center"><h4><strong>Venez découvrir nos différents biens en vente et en locations :</strong></h4>
        </div>
    </div>

    <div class="container mt-2">
            <div class="row">
            <div class="col-12 mb-5">
                <div id="maps">
                </div>
            </div>
        </div>
    </div>

</div> <!--fermture du container principal-->

<?php
require "footer.php"
?>