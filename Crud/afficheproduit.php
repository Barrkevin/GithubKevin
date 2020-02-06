<?php
require "config.php";

/*var_dump($_GET);*/

if (isset($_GET["id"])) {   /*le isset vérifie que le transfert se fait bien*/
    if (!empty($_GET)) {   /*if empty -> s'il est vide. !empty -> s'il n'est pas vide, prends le id*/
        $id = htmlspecialchars(trim($_GET["id"]));   /*Convertit les caractères spéciaux en entités HTML*/
    }   /*trim pour effacer les espaces*/
}


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

$db = connect();

$sql = "select products.id as pid,products.name as pname,products.description,products.price,categories.name as cname,image,categories.id  from products
inner join categories on products.category_id = categories.id where products.id=:ids";
/*IDS --> Pour vérifier que rien n'a été injecté*/

$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();

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
    <link rel="stylesheet" href="css/cssimageafficheproduit.css">
</head>
<body>

<div class="container mt-2">
    <div class="text-center mt-3 offset-sm-2 col-8 bg-white border border-secondary">
        <h1>Produit</h1>
        <hr id="hr16" class="mb-4">
        <div class="container">
            <?php
            while ($data = $req->fetchObject()) {      /* Tant que data = req... fetchObject renvoi directement le tableau*/
            /*echo "<img src=libs/img/" . $data->image . "/>";*/
            ?>
            <img src="libs/img/<?php echo $data->image ?>" class="d-block w-100" id="imgaffiche" alt="img54">

        </div>
        <div class="row">
            <div id="textphoto" class="col-12 mt-3 h5">
                <p>Id du produit : <?php echo $data->pid ?></p>
                <p>Nom du produit : <?php echo $data->pname ?></p>
                <p>Description du produit : <?php echo $data->description ?></p>
                <p>Prix du produit : <?php echo $data->price ?></p>
                <p>Catégorie du produit : <?php echo $data->cname ?></p>
            </div>
        </div>

        <?php
        }
        ?>
        <a href="index.php">
            <button type="button" class="btn btn-primary w-100 mt-2 mb-5">
                Retour
            </button>
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