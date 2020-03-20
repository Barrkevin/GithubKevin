<?php

require "../bdd/FonctionConnect.php";   /*On appelle le fichier config*/
<<<<<<< HEAD
$db = connect();
=======
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32


if (isset($_POST["id"])) {
    $id = htmlspecialchars(trim($_POST["id"]));
}


$sqlId = "Select map_id, media_id from biensimmo where id = :ids";    // On sélectionne les id depuis la table biensimmo sur l'id récupéré depuis la page précédente
$req = $db->prepare($sqlId);
$req->bindParam(':ids', $id);
$req->execute();

$returne = $req->fetchObject(); /*Création d'une variable de stockage avec le fetchobject */

$id_map = $returne->map_id;  /* on donne un nom à l'id de la table map, on loccurence id_map*/
$id_media = $returne->media_id; /* on donne un nom à l'id de la table media, on loccurence id_media*/


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
    $photos = htmlspecialchars(trim($_POST["picture"]));
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
$req->bindParam(':ids', $id_map);
=======
$map = "UPDATE map SET latitude=:lat, longitude=:long WHERE map.id=" . $id_map;


$req = $db->prepare($map);
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
$req->bindParam(':lat', $latitude);
$req->bindParam(':long', $longitude);
$req->execute();


//var_dump($_POST);
<<<<<<< HEAD
$modifphotos = "UPDATE media SET photos=:picture WHERE media.id = :ids";
$req = $db->prepare($modifphotos);
$req->bindParam(':ids', $id_media);
=======
$modifphotos = "UPDATE media SET photos=:picture WHERE media.id=" . $id_media;
$req = $db->prepare($modifphotos);
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
$req->bindParam(':picture', $photos);
$req->execute();


<<<<<<< HEAD
$modif = "UPDATE biensimmo SET name=:nom, adresse=:adressage, description=:descript, category_id=:categ WHERE biensimmo.id = :ids";


$req = $db->prepare($modif);/*-> veut dire va chercher la méthode de l'objet*/
$req->bindParam(':ids', $id);
=======
$modif = "UPDATE biensimmo SET name=:nom, adresse=:adressage, description=:descript, category_id=:categ WHERE biensimmo.id=" . $id;


$req = $db->prepare($modif);            /*-> veut dire va chercher la méthode de l'objet*/
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
$req->bindParam(':nom', $name);
$req->bindParam(':adressage', $adresse);
$req->bindParam(':descript', $description);
$req->bindParam(':categ', $idcategories);
$req->execute();


if ($req->fetch() == false) {
    header('location: ../TableauBiens.php');
} else {
    echo "erreur";
}