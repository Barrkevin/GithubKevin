<?php
session_start();
require "header.php";

?>


<div class="container">
    <h2 class="mt-4 text-center">Administratif</h2>
    <hr id="hr01">

    <div class="row">
        <div class="col-4">
            <div class="h5">Fiche individuel de présence :</div>
            <a href="libs/pdf/ficheindividueldepresence.pdf" download>
                <button type="button" class="btn btn-dark">Cliquez-ici pour télécharger</button>
                </a>
        </div>

        <div class="col-4">
            <div class="h5">Barème kilométrique forfaitaire :</div>
            <a href="libs/pdf/baremekm.pdf" download>
                <button type="button" class="btn btn-dark">Cliquez-ici pour télécharger</button>
                </a>
        </div>

        <div class="col-4">
            <div class="h5">Note de frais :</div>
            <a href="libs/pdf/notedefrais.pdf" download>
                <button type="button" class="btn btn-dark">Cliquez-ici pour télécharger</button>
                </a>
        </div>
    </div>

</div>


<?php
require "footer.php"
?>

