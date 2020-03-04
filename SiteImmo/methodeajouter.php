<?php

require "fonction.php";   /*On appelle le fichier config*/


//var_dump($_POST);


if (isset($_POST["nom"])) {                 /*Je récupère ce qu'il y dans "nom" à l'interieur du formulaire et lui attribu le nouveau nom*/
    $name = htmlspecialchars(trim($_POST["nom"]));
}


if (isset($_POST["adressage"])) {
    $adresse = htmlspecialchars(trim($_POST["adressage"]));
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


if (isset($_POST["lat"])) {
    $latitude = htmlspecialchars(trim($_POST["lat"]));
}


if (isset($_POST["long"])) {
    $longitude = htmlspecialchars(trim($_POST["long"]));
}


$ajouter = "INSERT INTO map(latitude, longitude) VALUES(:lat, :long)";

$req = $db->prepare($ajouter);
$req->bindParam(':lat', $latitude);
$req->bindParam(':long', $longitude);
$req->execute();

$ids = $db->lastInsertId();


$ajouter = "INSERT INTO biensimmo(name, adresse, description, category_id, image, map_id) VALUES(:nom, :adressage, :descript, :categ, :picture, ids)";


$req = $db->prepare($ajouter);
$req->bindParam(':nom', $name);
$req->bindParam(':adressage', $adresse);
$req->bindParam(':descript', $description);
$req->bindParam(':categ', $idcategories);
$req->bindParam(':picture', $image);
$req->bindParam(':ids', $ids);
$req->execute();


header("location: bienimo.php");
