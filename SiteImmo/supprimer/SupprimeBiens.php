<?php
session_start();
require "../bdd/FonctionConnect.php";
$db = connect();

/*var_dump($_GET);*/

if (isset($_GET["id"])) {
    if (!empty($_GET["id"])) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}

/*$db = connect();
var_dump($db);
*/
$sqlId = "Select map_id, media_id from biensimmo where id = :ids";    // On sélectionne les id depuis la table biensimmo sur l'id récupéré depuis la page précédente
$req = $db->prepare($sqlId);
$req->bindParam(':ids', $id);
$req->execute();

$returne = $req->fetchObject(); /*Création d'une variable de stockage avec le fetchobject */

$id_map = $returne->map_id;  /* on donne un nom à l'id de la table map, on loccurence id_map*/
$id_media = $returne->media_id; /* on donne un nom à l'id de la table media, on loccurence id_media*/

//var_dump($id_map);
//var_dump($id_media);


$sqlMap = "delete from map where id = :ids";  // On supprime l'id de la table map
$req = $db->prepare($sqlMap);
$req->bindParam(':ids', $id_map);
$req->execute();


$sqlMedia = "delete from media where id = :ids"; // On supprime l'id de la table media
$req = $db->prepare($sqlMedia);
$req->bindParam(':ids', $id_media);
$req->execute();

$sql = "delete from biensimmo where id = :ids"; // On supprime l'id de la table biensimmo
$req = $db->prepare($sql);
$req->bindParam(':ids', $id);
$req->execute();

/*
if (count($req->fetch()) != 0) {
    header("location: ../TableauBiens.php");
}*/

header("location: ../TableauBiens.php");