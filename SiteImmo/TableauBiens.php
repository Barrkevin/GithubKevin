<?php
session_start();
require "bdd/FonctionConnect.php";
<<<<<<< HEAD
$db = connect();
=======
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32


/*Pour aller chercher quelque chose de précis :*/
$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription,
categories.name AS cname, map.id AS mid, map.latitude AS mlat, map.longitude AS mlong, categories.id,
media.id as mdid, media.photos as mdphotos
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id
INNER JOIN map ON biensimmo.map_id = map.id
INNER JOIN media ON biensimmo.media_id = media.id;";


/*$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription, image AS bimage
categories.name AS cname, categories.id AS cid,
map.id AS mid, map.latitude AS mlat, map.longitude AS mlong, 
media.id as mdid, media.photos as mdphotos
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id
INNER JOIN map ON biensimmo.map_id = map.id
INNER JOIN media ON biensimmo.media_id = media.id;";*/
/*On sélectionne la table biens, on va chercher l'id on lui attribu un nom, en l'occurence ici "bid"*/

//$map = "SELECT * FROM biens INNER JOIN map ON biens.map_id = map.id";

/*$sql = "select biens.id as bid,biens.adresse,biens.name as bname, biens.description,categories.name as cname, image,categories.id from biens
inner join categories on biens.category_id = categories.id;";*/


$req = $db->prepare($sql);
$req->execute();

/*$req = $db->prepare($map);
$req->execute();*/


require "Header.php";
?>

    <body>
    <link rel="stylesheet" href="src/css/TableauBiens.css">
    <div class="container">
        <div class="text-center mt-3">
<<<<<<< HEAD
            <h1><strong>Tableaux des biens</strong></h1>
=======
            <h1>Tableaux des biens</h1>
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {

                ?>
                <a href="AjoutBiens.php">
                    <button type="button" class="btn btn-success">Ajouter un bien immobilier</button>
                </a>

                <?php
            }

            ?>
            <table class="table table-striped table-dark mt-3 text-center">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>latitude</th>
                    <th>longitude</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                /*le while est une boucle, elle commence ici =>{ et se finit à la fermeture*/
                /*https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912133-les-boucles*/
                while ($data = $req->fetchObject()){
                /*var_dump($data->pname);*/
                ?>

                <tr>
                    <td><?php echo substr($data->bname, 0, 50) ?></td>
                    <td><?php echo substr($data->badresse, 0, 50) ?></td>
                    <td><?php echo substr($data->mlat, 0, 6) ?></td>
                    <td><?php echo substr($data->mlong, 0, 6) ?></td>
                    <td><?php echo substr($data->bdescription, 0, 50) ?></td>
                    <td><?php echo $data->cname ?></td>
<<<<<<< HEAD
                    <td><img class="rounded-circle" src="src/img/<?php echo $data->mdphotos ?>" id="img1" alt="img"></td>
=======
                    <td><img src="src/img/<?php echo $data->mdphotos ?>" id="img1" alt="img"></td>
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
                    <td>
                        <?php
                        if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {


                            ?>

                            <a href="UpdateBiens.php?id=<?php echo $data->bid ?>"
                            <button type="button" class="btn btn-success mt-1">Modifier</button>


<<<<<<< HEAD
                            <a href="supprimer/SupprimeBiens.php?id=<?php echo $data->bid ?>"
=======
                            <a href="SupprimeBiens.php?id=<?php echo $data->bid ?>"
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
                            <button type="button" class="btn btn-warning ml-1 mt-1">Supprimer</button>


                            <?php
                        }
                        ?>
                        <a href="DetailsBiens.php?id=<?php echo $data->bid ?>"
                        <button type="button" class="btn btn-primary ml-1 mt-1">Voir +</button>
                        </a>
                    </td>
                </tr>
                </tbody>

                <?php
                /*On ferme la balise php plus loin (on est obligé de faire ça pour fermer l'indexation des champs de données) ici c'est la fin de la boucle*/
                }
                ?>
            </table>
        </div>
    </div>
    </body>

<?php
require "Footer.php"
?>