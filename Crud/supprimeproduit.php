<?php
require "config.php";

/*var_dump($_GET);*/

if (isset($_GET['id'])) {
    if (!empty($_GET["id"])) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}

function connect()
{
    try {
        $db = new PDO('mysql:host=' . LOCALHOST . ';dbname=' . DATABASE . ';charset=utf8', USER, MDP);
        /*echo 'ok';*/
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

$db = connect();

$sql = "delete from products where id=:ids";
/*IDS --> Pour vérifier que rien n'a été injecté*/


$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();

/*var_dump($req->fetch());*/

if ($req->fetch() == 0) {
    header("location: index.php");
} else {
    echo "Suppression impossible";
}

/*count permet de compter les éléments d'un tableau ou d'un objet*/
