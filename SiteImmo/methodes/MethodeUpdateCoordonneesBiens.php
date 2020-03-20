<?php

require "../bdd/FonctionConnect.php";   /*On appelle le fichier config*/
$db = connect();


if (isset($_POST["id"])) {
    $id = htmlspecialchars(trim($_POST["id"]));
}

if (isset($_POST["idProd"])) {
    $idProd = htmlspecialchars(trim($_POST["idProd"]));
}

if (isset($_POST["lat"])) {
    $latitude = htmlspecialchars(trim($_POST["lat"]));


}
if (isset($_POST["long"])) {
    $longitude = htmlspecialchars(trim($_POST["long"]));
}


$map = "UPDATE map SET latitude=:lat, longitude=:long WHERE map.id = :ids";


$req = $db->prepare($map);
$req->bindParam(':ids', $id);
$req->bindParam(':lat', $latitude);
$req->bindParam(':long', $longitude);
$req->execute();



if ($req->fetch() == false) {
    header('location: ../DetailsBiens.php?id=' . $idProd);
} else {
    echo "erreur";
}