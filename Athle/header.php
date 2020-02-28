<?php

?>

<!doctype html>
<html lang="fr">
<head>
    <title>C.S.Athlétisme Avion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headerfooter.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="index.php">
        <img src="libs/img/avionremove.png" alt="logo" class="rounded-circle"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <div class="btn-group mt-2">
            <button type="button" class="btn btn-warning">Le club</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="organigramme.php" id="">Organigrame du club</a>
                <a class="dropdown-item" href="formulaire.php" id="">Formulaire d'inscription et réglement</a>
                <a class="dropdown-item" href="horaires.php" id="">Horaires des entrainement</a>
                <a class="dropdown-item" href="calendrier.php" id="">Calendrier</a>
                <a class="dropdown-item" href="administratif.php" id="">Administratif</a>
                <a class="dropdown-item" href="classement.php" id="">Classement des clubs</a>
            </div>
        </div>

        <div class="btn-group ml-2 mt-2">
            <button type="button" class="btn btn-warning">Meeting Javary</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="meeting.php" id="">Le Meeting</a>
                <a class="dropdown-item" href="programme.php" id="">Le programme</a>
                <a class="dropdown-item" href="albummeeting.php" id="">Albums meeting</a>
            </div>
        </div>



        <div class="btn-group mt-2">
            <button type="button" class="btn btn-warning ml-2">Athlé Forme et santé</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="" id="">Athlé santé loisir</a>
                <a class="dropdown-item" href="#" id="">Marche nordique</a>
                <a class="dropdown-item" href="#" id="">Préparation physique</a>
                <a class="dropdown-item" href="#" id="">Test VMA</a>
            </div>
        </div>


        <div class="btn-group mt-2">
            <button type="button" class="btn btn-warning ml-2">Documentations</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="formation.php" id="">Formation du jeune athlète</a>
                <a class="dropdown-item" href="regles.php" id="">Règles des compétitions</a>
                <a class="dropdown-item" href="officiel.php" id="">Officiel</a>
                <a class="dropdown-item" href="lutte.php" id="">Lutte anti dopage</a>
            </div>
        </div>


        <a href="crossglissoire.php"><button class="btn btn-warning ml-2 mt-2" id="">Cross de la glissoire</button></a>
        <a href="resultats.php"><button class="btn btn-warning ml-2 mt-2" id="">Résultats</button></a>
        <a href="contact.php"><button class="btn btn-warning ml-2 mt-2" id="">Contact</button></a>


            <!--Si l'utilisateur est connecté (session ouverte)-->
            <?php
            if (isset($_SESSION["role"])){
            ?>


                <a href="deconnexion.php"><button class="btn btn-warning ml-2 mt-2" id="">Deconnexion</button></a>

                <!--Si non (==null) montrer connexion-->
                <?php
            }

            else if (isset($_SESSION["role"]) ==null){
                ?>
                <a href="inscription.php"><button class="btn btn-warning ml-2 mt-2" id="">Inscription</button></a>
                <a href="Connexion.php"><button class="btn btn-warning ml-2 mt-2" id="">Connexion</button></a>

            <?php
            }
            ?>
        </ul>

    </div>
    <div align="center">
        <?php
        if (isset($_SESSION["role"])&&$_SESSION["pseudo"]) {
            ?>
            <h4 id="presentation">Bonjour <?php echo $_SESSION["pseudo"] ?></h4>
            <?php
        }
        ?>
    </div>
</nav>