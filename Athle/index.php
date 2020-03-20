<?php
session_start();
require "fonction.php";

/*Pour aller chercher quelque chose de précis :*/
$sql = "select competition.id as cptid,competition.name as cptname,competition.description,categories.name as cname,categories.id  from competition
inner join categories on competition.category_id = categories.id;";

/*On sélectionne la table products, on va chercher l'id on lui attribu un nom, en l'occurence ici "pid"*/


$req = $db->prepare($sql);
$req->execute();


require "header.php";
?>
    <!doctype html>
    <html lang="fr">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/indexmap.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <script src="js/map.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
<<<<<<< HEAD
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
=======
<body>
<h1 class="text-center mt-3">
    Bienvenue sur le site officiel du C.S.Athlétisme Avion
</h1>
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32

<div class="container">

<<<<<<< HEAD
    <div class="container">
        <div class="row">
            <div id="textphoto" class="col-12 mt-3">
                <a href="attention.png" download>c'est ici pour le ddl</a><br>
                <a href="https://bases.athle.fr/asp.net/liste.aspx?frmbase=cclubs&frmmode=2&frmespace=&frmtypeclub=M&frmsaison=2019&frmnclub=062085&frmruptures="
                    target="_blank">
                    Classement des clubs</a>
            </div>
=======
        <h4 class="text-center">Les compétitions a venir :</h4>

    <?php
    if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {

        ?>
        <div class="text-center">
        <a href="ajoutcompetition.php">
            <button type="button" class="btn btn-warning">Ajout d'une competition a venir</button>
        </a>
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
        </div>

        <?php
    }

    ?>

    <table class="table table-striped table-dark mt-3 text-center">
        <thead>
        <tr>
            <th scope="col-2">Date</th>
            <th scope="col-2">Description</th>
            <th scope="col-1">Catégorie</th>
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {


                ?>
                <th scope="col-2">Action</th>
                <?php
            }
            ?>

        </tr>
        </thead>
        <tbody>
        <?php
        /*le while est une boucle, elle commence ici =>{ et se finit à la fermeture*/
        /*https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912133-les-boucles*/
        while ($data = $req->fetchObject()){
        /*var_dump($data->cptname);*/
        ?>
        <tr>
            <td><?php echo $data->cptname ?></td>
            <td><?php echo substr($data->description, 0, 50) ?></td>
            <td><?php echo $data->cname ?></td>
            <td>
                <?php
                if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {


                    ?>

                    <a href="updatecptvnr.php?id=<?php echo $data->cptid ?>"
                    <button type="button" class="btn btn-primary">Modifier</button>


                    <a href="supprimecptvnr.php?id=<?php echo $data->cptid ?>"
                    <button type="button" class="btn btn-danger ml-2">Supprimer</button>
                    <?php
                }
                ?>

                <a href="affichecpt.php?id=<?php echo $data->cptid ?>"
                <button type="button" class="btn btn-success ml-2">Voir +</button>
                </a>
            </td>
        </tr>
        </tbody>
        <?php
        /*On ferme la balise php plus loin (on est obligé de faire ça pour fermer l'indexation des champs de données) ici c'est la fin de la boucle*/
        }
        ?>
    </table>


    <div class="row">
        <div id="textsit" class="col-12 h5">Nous situer :
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-12">
            <div id="map">
            </div>
        </div>
    </div>

</div>
</body>

<?php
require "footer.php"
?>