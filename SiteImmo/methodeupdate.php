<?php

require "fonction.php";   /*On appelle le fichier config*/



if (isset($_POST["id"])) {
    $id = htmlspecialchars(trim($_POST["id"]));
}


if (isset($_POST["adressage"])) {
    $adresse = htmlspecialchars(trim($_POST["adressage"]));
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


if (isset($_POST["picture"])) {
    $image = htmlspecialchars(trim($_POST["picture"]));
}


$modif = "UPDATE biensimmo SET name=:nom, adresse=:adressage, description=:descript, category_id=:categ, image=:picture WHERE biensimmo.id=" . $id;


$req = $db->prepare($modif);            /*-> veut dire va chercher la méthode de l'objet*/
$req->bindParam(':nom', $name);
$req->bindParam(':adressage', $adresse);
$req->bindParam(':descript', $description);
$req->bindParam(':categ', $idcategories);
$req->bindParam(':picture', $image);
$req->execute();



if ($req->fetch() == false) {
    header('location: bienimo.php');
} else {
    echo "erreur";
}
