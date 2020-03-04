<?php
session_start();
require "fonction.php";

/*var_dump($_GET);*/

if (isset($_GET["id"])) {   /*le isset vérifie que le transfert se fait bien*/
    if (!empty($_GET)) {   /*if empty -> s'il est vide. !empty -> s'il n'est pas vide, prends le id*/
        $id = htmlspecialchars(trim($_GET["id"]));   /*Convertit les caractères spéciaux en entités HTML*/
    }   /*trim pour effacer les espaces*/
}


$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription, map.latitude AS mlat, 
map.longitude AS mlong, categories.name AS cname, biensimmo.image AS bimage, categories.id 
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id 
INNER JOIN map ON biensimmo.map_id = map.id WHERE biensimmo.id = :ids;";


$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();


require "header.php"
?>
    <link rel="stylesheet" href="src/css/affichebien.css">

    <div class="container mt-4">
<?php
while ($data = $req->fetchObject()) {      /* Tant que data = req... fetchObject renvoi directement le tableau*/
    /*echo "<img src=libs/img/" . $data->image . "/>";*/
    ?>


            <div class="container text-center">
            <h2 class="mb-3 mt-3">
                <?php echo $data->bname ?></h2>
            <img class="w-75" src="src/img/<?php echo $data->bimage ?>"
                 <br>
                <p class="mt-3"><strong>Catégorie : </strong>
                    <?php echo $data->cname ?></p>
                <p class="mt-3"><strong>Adresse : </strong>
                    <?php echo $data->badresse ?></p>
                <p class="mt-3"><strong>Latitude : </strong>
                    <?php echo substr($data->mlat, 0,6) ?></p>
                <p class="mt-3"><strong>Longitude : </strong>
                    <?php echo substr($data->mlong, 0,6) ?></p>
                <p class="mt-3"><strong>Description :</strong></p>
                <p><?php echo $data->bdescription ?></p>
                <a href="bienimo.php" class="btn btn-primary mt-3 mb-3">Retour aux biens</a>
            </div>
        </div>

    <?php
}
?>


<?php
require "footer.php"
?>