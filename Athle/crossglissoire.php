<?php
session_start();
require "header.php";

?>

    <div class="container">
        <h1 class="text-center">Cross de la glissoire</h1>
        <hr>
        <div class="row mt-5">
            <div class="col-6">
                <img src="libs/img/crossglissoire.jpeg">
            </div>
            <div class="col-6 text-center">
                <h3>Les résultats :</h3>

                <div class="mt-3">
                <a href="http://csathletisme.avion.pagesperso-orange.fr/Documents/2007%20COURSE%204.pdf" target="_blank">
                    <button type="button" class="btn btn-dark mt-2 ml-2">2007</button>
                </a>

                <a href="https://bases.athle.fr/asp.net/liste.aspx?frmbase=resultats&frmmode=1&frmespace=118&frmcompetition=026241" target="_blank">
                    <button type="button" class="btn btn-dark mt-2 ml-2">2008</button>
                </a>

                </div>

                <br>
                <h3 class="mt-3">Album :</h3>

                <div class="mt-3">

                <a href="https://www.dailymotion.com/video/x351gq" target="_blank">
                    <button type="button" class="btn btn-dark mt-2 ml-2">Vidéo</button>
                </a>

                <a href="https://photos.google.com/share/AF1QipNFqtsI2KRXpLJkBTIF7xFUE3iNBQMwJe1ljn0eZFMUYw6BHUSwlXpV_HlDuF2-wQ?key=QzZGM0luZ2hyOXIzUEUwVHBJVW1iUmE3ZVNYNmlR" target="_blank">
                    <button type="button" class="btn btn-dark mt-2 ml-2">Cross du 22/10/2006</button>
                </a>

                <a href="https://photos.google.com/share/AF1QipMmCz_KoBgXxtjzrP7LFqeECkp2XR5L2crIqxazuoWiIDSGrz7ge3dTNbW9Lir3Ug?key=Y0xEZjFnbjRxcFhOR3A0V2RtQldPNXgtd3JzUVpB" target="_blank">
                    <button type="button" class="btn btn-dark mt-2 ml-2">Départementaux d'Avion 01/2008</button>
                </a>
            </div>

                <div class="mt-3">
                <a href="http://csathletisme.avion.pagesperso-orange.fr/" target="_blank">
                    <button type="button" class="btn btn-dark mt-2">Ancien site cross de la glissoire 2</button>
                </a>

                <a href="https://crossdelaglissoire.monsite-orange.fr/" target="_blank">
                    <button type="button" class="btn btn-dark mt-2">Ancien site cross de la glissoire 1</button>
                </a>

                </div>
            </div>


        </div> <!--fermeture première row-->


    </div> <!--fermeture de la div container-->


<?php
require "footer.php"
?>