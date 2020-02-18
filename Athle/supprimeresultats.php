<?php
require "fonction.php";

/*var_dump($_GET);*/

if (isset($_GET['id'])) {
    if (!empty($_GET["id"])) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}


$sql = "delete from resultats where id=:ids";
/*IDS --> Pour vérifier que rien n'a été injecté*/


$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();

/*var_dump($req->fetch());*/

if ($req->fetch() == 0) {
    header("location: resultats.php");
} else {
    echo "Suppression impossible";
}
