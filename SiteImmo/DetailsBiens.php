<?php
session_start();
require "bdd/FonctionConnect.php";
$db = connect();

/*var_dump($_GET);*/

if (isset($_GET["id"])) {   /*le isset vérifie que le transfert se fait bien*/
    if (!empty($_GET)) {   /*if empty -> s'il est vide. !empty -> s'il n'est pas vide, prends le id*/
        $id = htmlspecialchars(trim($_GET["id"]));   /*Convertit les caractères spéciaux en entités HTML*/
    }   /*trim pour effacer les espaces*/
}


$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription,
categories.name AS cname, map.id AS mid, map.latitude AS mlat, map.longitude AS mlong, categories.id,
media.id as mdid, media.photos as mdphotos
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id
INNER JOIN map ON biensimmo.map_id = map.id
INNER JOIN media ON biensimmo.media_id = media.id
WHERE biensimmo.id = :ids";


$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();


require "Header.php"
?>
    <link rel="stylesheet" href="src/css/AfficheBiens.css">

    <body>
    <div class="container mt-4">
        <?php
        while ($data = $req->fetchObject()) {      /* Tant que data = req... fetchObject renvoi directement le tableau*/
        /*echo "<img src=libs/img/" . $data->image . "/>";*/
        ?>


        <div class="container text-center">
            <h1 class="mb-3 mt-3"><strong>
                <?php echo $data->bname ?></strong></h1>
            <img class="w-100" src="src/img/<?php echo $data->mdphotos ?>"
            <br>
            <p class="mt-3"><strong>Catégorie : </strong>
                <?php echo $data->cname ?></p>
            <p class="mt-3"><strong>Adresse : </strong>
                <?php echo $data->badresse ?></p>
            <p class="mt-3"><strong>Latitude : </strong>
                <?php echo substr($data->mlat, 0, 10) ?></p>
            <p class="mt-3"><strong>Longitude : </strong>
                <?php echo substr($data->mlong, 0, 10) ?></p>
            <p class="mt-3"><strong>Description :</strong></p>
            <p><?php echo $data->bdescription ?></p>


            <td>
                <?php
                if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {

                    ?>

                    <a href="UpdatePhotosBiens.php?id=<?php echo $data->mdid ?>&idProd=<?= $id; ?>"
                    <button type="button" class="btn btn-success mr-2">Modifier la photo</button>

                    <!--le $id récupéré sur la page grâce au if isset est celui de la page précédente,
                    ici on lui attribue le nom idProd, on l'envoi vers la page UpdateCoordoneesBiens.php,
                    pour ensuite le récupérer avec un if isset, l'intégrer dans un d-none,
                    pour ensuite l'envoyer vers la page MethodeUpdateCoordonneesBiens.php ou l'on récupère
                    l'id toujours avec un if isset pour ensuite une fois la requête sql effectuée, retourner
                     sur cette page qui comporte l'id du bien, en l'occurence l'id que l'on a renomé "idprod".
                     J'appelle cette méthode "Methode chainage" -->
                    <a href="UpdateCoordoneesBiens.php?id=<?php echo $data->mid ?>&idProd=<?= $id; ?>"
                    <button type="button" class="btn btn-warning mr-2">Modifier coordonnées</button>

                    <?php
                }
                ?>



            <a href="TableauBiens.php" class="btn btn-primary mt-3 mb-3">Retour aux biens</a>
        </div>
    </div>

    <?php
    }
    ?>

    </body>


<?php
require "Footer.php"
?>