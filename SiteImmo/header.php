<!doctype html>
<html lang="fr">
<head>
    <title>Immobilette</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" href="src/boots/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/HeaderFooterMap.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css">

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="Index.php">
        <img src="src/img/Logo.jpg" alt="logo" class="rounded-circle"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <a href="TableauBiens.php">
                <button class="btn btn-warning ml-2 mt-2" id="">Biens immobilier</button>
            </a>
            <a href="Contact.php">
                <button class="btn btn-warning ml-2 mt-2" id="">Contact</button>
            </a>
        </ul>
        <?php
        if (isset($_SESSION["role"])) {
            ?>


            <a href="deconnexion/DeconnexionUser.php">
                <button class="btn btn-warning ml-2 mt-2" id="">Deconnexion</button>
            </a>

            <!--Si non (==null) montrer connexion-->
            <?php
        } else if (isset($_SESSION["role"]) == null) {
            ?>
            <a href="InscriptionUser.php">
                <button class="btn btn-warning ml-2 mt-2" id="">Inscription</button>
            </a>
            <a href="ConnexionUser.php">
                <button class="btn btn-warning ml-2 mt-2" id="">Connexion</button>
            </a>

            <?php
        }
        ?>

        <a class="ml-2 mt-2" href="mailto:kevin.radosz@gmail.com"><i id="enveloppe" class='uil uil-envelope'></i></a>
        </ul>

    </div>
    <div align="center">
        <?php
        if (isset($_SESSION["role"]) && $_SESSION["pseudo"]) {
            ?>
            <h3 id="presentation"><strong>Bonjour <?php echo $_SESSION["pseudo"] ?></strong></h3>
            <?php
        }
        ?>
    </div>
    </div>
</nav>

</html>