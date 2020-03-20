<?php

require "../bdd/FonctionConnect.php";   /*On appelle le fichier config*/
$db = connect();


if (isset($_POST["id"])) {
    $id = htmlspecialchars(trim($_POST["id"]));
}

if (isset($_POST["idProd"])) {
    $idProd = htmlspecialchars(trim($_POST["idProd"]));
}

if (isset($_POST["picture"])) {
    $photos = htmlspecialchars(trim($_POST["picture"]));
}

//var_dump($_POST);
$modifphotos = "UPDATE media SET photos=:picture WHERE media.id = :ids";
$req = $db->prepare($modifphotos);
$req->bindParam(':ids', $id);
$req->bindParam(':picture', $photos);
$req->execute();


if ($req->fetch() == false) {
    header('location: ../DetailsBiens.php?id=' . $idProd);
} else {
    echo "erreur";
}

