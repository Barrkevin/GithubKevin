<?php

require "fonction.php";   /*On appelle le fichier config*/



if (isset($_POST["id"])) {
    $id = htmlspecialchars(trim($_POST["id"]));
}


if (isset($_POST["nom"])) {                 /*Je récupère le nom du produit dans le formulaire et lui attribu le nouveau nom*/
    $name = htmlspecialchars(trim($_POST["nom"]));
}


if (isset($_POST["descript"])) {
    $description = htmlspecialchars(trim($_POST["descript"]));
}


if (isset($_POST["categ"])) {
    $idcategories = htmlspecialchars(trim($_POST["categ"]));
}



$db = connect();


$modif = "UPDATE competition SET name=:nom, description=:descript, category_id=:categ WHERE competition.id=" . $id;



$req = $db->prepare($modif);            /*-> veut dire va chercher la méthode de l'objet*/
$req->bindParam(':nom', $name);
$req->bindParam(':descript', $description);
$req->bindParam(':categ', $idcategories);

$req->execute();


if ($req->fetch() == false) {
    header('location: index.php');
} else {
    echo "erreur";
}
