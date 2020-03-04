<?php

require "fonction.php";   /*On appelle le fichier config*/


//var_dump($_POST);


if (isset($_POST["lat"])) {
    $latitude = htmlspecialchars(trim($_POST["lat"]));
}

if (isset($_POST["long"])) {
    $longitude = htmlspecialchars(trim($_POST["long"]));
}

$ajouter = "INSERT INTO map(latitude, longitude) VALUES(:latitude, :longitude)";


$req = $db->prepare($ajouter);
$req->bindParam(':lat', $latitude);
$req->bindParam(':long', $longitude);
$req->execute();

header("location: bienimo.php");
