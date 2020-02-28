<?php
session_start();
require "header.php";

?>

<link rel="stylesheet" href="css/imgtete.css">
<div class="container">
<div class="row mt-5">
    <div class="col-12" id="imgtete">
        <img src="libs/img/coupon.jpg">
        <img class="ml-5" src="libs/img/ticket-caf.jpg">
    </div>
</div>
        <hr id="hr01">
    <h1 id="titre01">Formulaire</h1>
        <hr id="hr02">
    <div class="row">
        <div class="col-8">
            <strong>
            <h4 id="titre02">A fournir :</h4>
        <p>-    Certificat médical de moins de 6 mois ou le questionnaire de santé de la FFA reçu par e-mail.</p>
        <p>-    Dossier d'inscription.</p>
        <p>-    Pass Sport pour les moins de 18 ans www.agglo-lenslievin.fr (domiciliation sur la communauté d'agglomération Lens-Liévin.</p>
        <p>-    Une copie de la carte d'identité ou du livret de famille obligatoire pour une nouvelle adhésion.</p>
        <p>- Deux enveloppes timbrées.</p>
                </strong>
        </div>
        <div class="col-4">
                <a href="https://pass-sports.agglo-lenslievin.fr/"target="_blank"><img src="libs/img/passsport.jpg"></a>
        </div>
        </div>
    <hr id="hr03">

    <div id="titre03"><h4>Dossiers d'inscription :</h4></div>

    <div class="row mt-4">
        <div class="col-4">
            <a href="libs/pdf/dossierinscriptionecoleathletisme.pdf" download>
                <button type="button" class="btn btn-dark">Dossier d'inscription école d'athlétisme</button>
                </a>
        </div>
        <div class="col-4">
            <a href="libs/pdf/dossierinscriptioncompetition.pdf" download>
                <button type="button" class="btn btn-dark">Dossier d'inscription compétition</button>
                </a>
        </div>
        <div class="col-4">
            <a href="libs/pdf/dossierinscriptionformsante.pdf" download>
                <button type="button" class="btn btn-dark">Dossier d'inscription sport santé et running</button></a>
        </div>
    </div>


        <hr id="hr04">
    <div id="titre04"><h4>Certificat médicaux :</h4></div>

    <div class="row mt-4">
        <div class="col-6">
            <a href="libs/pdf/certifmedicalcompetition.pdf" download>
                <button type="button" class="btn btn-dark">Certificat medical (licence école d'athlé et compétition)</button>
                </a>
        </div>
        <div class="col-6">
            <a href="libs/pdf/certifmedicalsante.pdf" download>
                <button type="button" class="btn btn-dark">Certficat medical (licence athlé santé et running)</button>
                </a>
        </div>
    </div>

    <hr id="hr05">
    <div id="titre05"><h4>Règlement interne :</h4></div>

    <div class="row mt-4">
        <div class="col-12 text-center mb-5">
            <a href="libs/pdf/reglementinterne.pdf" download>
                <button type="button" class="btn btn-dark">Règlement interne</button>
                </a>
        </div>
    </div>

    </div>
 <!--div container-->



<?php
require "footer.php"
?>

