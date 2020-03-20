<?php

require "../bdd/FonctionConnect.php";   /*On appelle le fichier config*/
<<<<<<< HEAD
$db = connect();
=======
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32

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
    $photos = htmlspecialchars(trim($_POST["picture"]));
}


if (isset($_POST["lat"])) {
    $latitude = htmlspecialchars(trim($_POST["lat"]));
}


if (isset($_POST["long"])) {
    $longitude = htmlspecialchars(trim($_POST["long"]));
}

if (isset($_POST["picture"])) {
    $photos = htmlspecialchars(trim($_POST["picture"]));
}


$ajoutmap = "INSERT INTO map(latitude, longitude) VALUES(:lat, :long)";

$req = $db->prepare($ajoutmap);
$req->bindParam(':lat', $latitude);
$req->bindParam(':long', $longitude);
$req->execute();

$lastidmap = $db->lastInsertId();  /*Variable de stockage qui va prendre le dernier id insérer dans la BDD*/

$ajoutmedia = "INSERT INTO media(photos) VALUES(:picture)";

$req = $db->prepare($ajoutmedia);
$req->bindParam(':picture', $photos);
$req->execute();

$lastidmedia = $db->lastInsertId();  /*Variable de stockage qui va prendre le dernier id insérer dans la BDD*/


$ajoutbiens = "INSERT INTO biensimmo(name, adresse, description, category_id, map_id, media_id) VALUES(:nom, :adressage, :descript, :categ, :idmap, :idmedia)";


$req = $db->prepare($ajoutbiens);
$req->bindParam(':nom', $name);
$req->bindParam(':adressage', $adresse);
$req->bindParam(':descript', $description);
$req->bindParam(':categ', $idcategories);
$req->bindParam(':idmap', $lastidmap);
$req->bindParam(':idmedia', $lastidmedia);
$req->execute();


header("location: ../TableauBiens.php");
