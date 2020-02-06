<?php

require "config.php";   /*On appelle le fichier config*/

/*var_dump($_POST);*/


function connect()
{
    try {
        $db = new PDO('mysql:host=' . LOCALHOST . ';dbname=' . DATABASE . ';charset=utf8', USER, MDP);
        /*echo 'ok';*/
        /*$db -> setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );*/
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/*$id=0; */   /*Comme ce sont des variables il faut les initialiser*/


if (isset($_POST["id"])) {
    $id = htmlspecialchars(trim($_POST["id"]));
}


if (isset($_POST["nom"])) {                 /*Je récupère le nom du produit dans le formulaire et lui attribu le nouveau nom*/
    $name = htmlspecialchars(trim($_POST["nom"]));
}


if (isset($_POST["descript"])) {
    $description = htmlspecialchars(trim($_POST["descript"]));
}


if (isset($_POST["prix"])) {
    $price = htmlspecialchars(trim($_POST["prix"]));
}

if (isset($_POST["categ"])) {
    $idcategories = htmlspecialchars(trim($_POST["categ"]));
}

if (isset($_POST["picture"])) {
    $image = htmlspecialchars(trim($_POST["picture"]));
}


$db = connect();


$modif = "UPDATE products SET name=:nom, description=:descript, price=:prix, category_id=:categ, image=:picture WHERE products.id=" . $id;


/*echo $id;
echo $nname;
echo $ddescription;
echo $pprice;*/


$req = $db->prepare($modif);            /*-> veut dire va chercher la méthode de l'objet*/
/*$req->bindParam(':ids', $id);*/
$req->bindParam(':nom', $name);
$req->bindParam(':descript', $description);
$req->bindParam(':prix', $price);
$req->bindParam(':categ', $idcategories);
$req->bindParam(':picture', $image);

$req->execute();


if ($req->fetch() == false) {
    header('location: index.php');
} else {
    echo "erreur";
}
