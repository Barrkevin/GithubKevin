<?php

require "fonction.php";   /*On appelle le fichier config*/

/*
var_dump($_POST);*/


if (isset($_POST["nom"])) {                 /*Je récupère ce qu'il y dans "nom" à l'interieur du formulaire et lui attribu le nouveau nom*/
    $name = htmlspecialchars(trim($_POST["nom"]));
}


if (isset($_POST["descript"])) {
    $description = htmlspecialchars(trim($_POST["descript"]));
}


if (isset($_POST["categ"])) {
    $idcategories = htmlspecialchars(trim($_POST["categ"]));
}


$ajouter = "INSERT INTO competition(name, description, category_id) VALUES(:nom, :descript, :categ)";


$req = $db->prepare($ajouter);
$req->bindParam(':nom', $name);
$req->bindParam(':descript', $description);
$req->bindParam(':categ', $idcategories);
$req->execute();

header("location: index.php");