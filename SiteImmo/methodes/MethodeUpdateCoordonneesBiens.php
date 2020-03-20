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

if (isset($_POST["lat"])) {
    $latitude = htmlspecialchars(trim($_POST["lat"]));


}
if (isset($_POST["long"])) {
    $longitude = htmlspecialchars(trim($_POST["long"]));
}


<<<<<<< HEAD
$map = "UPDATE map SET latitude=:lat, longitude=:long WHERE map.id = :ids";


$req = $db->prepare($map);
$req->bindParam(':ids', $id);
=======
$map = "UPDATE map SET latitude=:lat, longitude=:long WHERE map.id=" . $id;


$req = $db->prepare($map);
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
$req->bindParam(':lat', $latitude);
$req->bindParam(':long', $longitude);
$req->execute();


<<<<<<< HEAD

=======
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
if ($req->fetch() == false) {
    header('location: ../DetailsBiens.php?id=' . $idProd);
} else {
    echo "erreur";
<<<<<<< HEAD
}
=======
}
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
