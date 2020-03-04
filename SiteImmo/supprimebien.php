<?php
require "fonction.php";

/*var_dump($_GET);*/

if (isset($_GET["id"])) {
    if (!empty($_GET["id"])) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}



$sqlId = "Select map_id from biensimmo where id = :ids";

$sql = "delete from map where id = $sqlId;";
$req = $db->prepare($sql);
$req->execute();


$sql = "delete from biensimmo where id=$id;";
$req = $db->prepare($sql);
$req->execute();


if (count($req->fetch()) != 0) {
    header("location: bienimo.php");
}
