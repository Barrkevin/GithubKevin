<?php

require "config.php";   /*On appelle le fichier config*/

/*
var_dump($_POST);*/

function connect()
{
    try {
        $db = new PDO('mysql:host=' . LOCALHOST . ';dbname=' . DATABASE . ';charset=utf8', USER, MDP);
        /*echo 'ok';*/
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

$db = connect();


if (isset($_POST["nom"])) {                 /*Je récupère ce qu'il y dans "nom" à l'interieur du formulaire et lui attribu le nouveau nom*/
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


if (isset($_POST["image"])) {
    $image = htmlspecialchars(trim($_POST["image"]));
}

$ajouter = "INSERT INTO products(name, description, price, category_id, image) VALUES(:nom, :descript, :prix, :categ, :image)";


$req = $db->prepare($ajouter);
$req->bindParam(':nom', $name);
$req->bindParam(':descript', $description);
$req->bindParam(':prix', $price);
$req->bindParam(':categ', $idcategories);
$req->bindParam(':image', $image);
$req->execute();

header("location: index.php");
