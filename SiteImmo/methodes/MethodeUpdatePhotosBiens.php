<?php

require "../bdd/FonctionConnect.php";   /*On appelle le fichier config*/
<<<<<<< HEAD
$db = connect();
=======
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32


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
<<<<<<< HEAD
$modifphotos = "UPDATE media SET photos=:picture WHERE media.id = :ids";
$req = $db->prepare($modifphotos);
$req->bindParam(':ids', $id);
=======
$modifphotos = "UPDATE media SET photos=:picture WHERE media.id=" . $id;
$req = $db->prepare($modifphotos);
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
$req->bindParam(':picture', $photos);
$req->execute();


if ($req->fetch() == false) {
    header('location: ../DetailsBiens.php?id=' . $idProd);
} else {
    echo "erreur";
}

