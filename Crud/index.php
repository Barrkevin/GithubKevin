<?php
require "config.php";   /*On appelle le fichier config*/

function connect()
{
    try {
        $db = new PDO('mysql:host=' . LOCALHOST . ';dbname=' . DATABASE . ';charset=utf8', USER, MDP);
        /*echo 'ok';*/
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/* Stockage dans une variable */
$db = connect();

/*On sélectionne toutes les données de la table products se trouvant dans la base de données */
/*$sql="SELECT * FROM products ";*/

/*Pour aller chercher quelque chose de précis :*/
$sql = "select products.id as pid,products.name as pname,products.description,products.price,categories.name as cname,image,categories.id  from products
inner join categories on products.category_id = categories.id;";

/*On sélectionne la table products, on va chercher l'id on lui attribu un nom, en l'occurence ici "pid"*/


$req = $db->prepare($sql);  /*Prépare une requête SQL à être exécuter par la méthode PDO vu plus au dessus*/
$req->execute();


/*while ($data=$req->fetchObject()){
    var_dump($data);
}*/
?>

<!doctype html>
<html lang="fr">
<head>
    <title>Tableaux</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/img.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inscription.php" id="navinscription"><h5>Inscription</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="connexion.php" id="navconnexion"><h5>Connexion</h5></a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="text-center mt-3">
        <h1>Tableau des articles</h1>
        <a href="ajoutproduit.php">
            <button type="button" class="btn btn-warning">Ajouter un produit</button>
        </a>
        <table class="table table-striped table-dark mt-3">
            <thead>
            <tr>
                <th scope="col-1">Id</th>
                <th scope="col-2">Nom</th>
                <th scope="col-2">Description</th>
                <th scope="col-1">Prix</th>
                <th scope="col-1">Catégorie</th>
                <th scope="col-4">Image</th>
                <th scope="col-2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            /*le while est une boucle, elle commence ici =>{ et se finit à la fermeture*/
            /*https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912133-les-boucles*/
            while ($data = $req->fetchObject()){
            /*var_dump($data->pname);*/
            ?>
            <tr>
                <td><?php echo $data->pid ?></td>
                <td><?php echo $data->pname ?></td>
                <td><?php echo $data->description ?></td>
                <td><?php echo $data->price ?></td>
                <td><?php echo $data->cname ?></td>
                <td><img src="libs/img/<?php echo $data->image ?>" id="img1" alt="img"></td>
                <td>
                    <a href="update.php?id=<?php echo $data->pid ?>"
                    <button type="button" class="btn btn-primary mr-2">Modifier</button>
                    <a href="supprimeproduit.php?id=<?php echo $data->pid ?>"
                    <button type="button" class="btn btn-danger mr-1">Supprimer</button>
                    <a href="afficheproduit.php?id=<?php echo $data->pid ?>">
                        <button type="button" class="btn btn-success">Découvrir</button>
                    </a>
                </td>
            </tr>
            </tbody>
            <?php
            /*On ferme la balise php plus loin (on est obligé de faire ça pour fermer l'indexation des champs de données) ici c'est la fin de la boucle*/
            }
            ?>
        </table>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>