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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="meeting.php" id="navmeeting"><h5>Meeting</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="resultats.php" id="navclub"><h5>Résultats</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="competitions.php" id="navcompet"><h5>Compétitions</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galerie.php" id="navgalerie"><h5>Galerie</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="liens.php" id="navliens"><h5>Liens</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inscription.php" id="navinscription"><h5>Inscription</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="connexion.php" id="navconnexion"><h5>Connexion</h5></a>
            </li>
        </ul>
    </div>
    <div align="center">
        <?php
        if (isset($_SESSION["role"])&&$_SESSION["pseudo"]) {
            ?>
            <h2 id="presentation">Bonjour <?php echo $_SESSION["pseudo"] ?></h2>
            <a id="deco" href="deconnexion.php">C'est ici pour se déconnecter !</a>
            <?php
        }
        ?>
    </div>
</nav>