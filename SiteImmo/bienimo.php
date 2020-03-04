<?php
session_start();
require "fonction.php";

/*Pour aller chercher quelque chose de précis :*/
$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription, 
categories.name AS cname, map.id AS mid, map.latitude AS mlat, map.longitude AS mlong, image AS bimage, categories.id
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id
INNER JOIN map ON biensimmo.map_id = map.id;";
/*On sélectionne la table biens, on va chercher l'id on lui attribu un nom, en l'occurence ici "bid"*/

//$map = "SELECT * FROM biens INNER JOIN map ON biens.map_id = map.id";

/*$sql = "select biens.id as bid,biens.adresse,biens.name as bname, biens.description,categories.name as cname, image,categories.id from biens
inner join categories on biens.category_id = categories.id;";*/


$req = $db->prepare($sql);
$req->execute();

/*$req = $db->prepare($map);
$req->execute();*/


require "header.php";
?>


    <link rel="stylesheet" href="src/css/tab.css">
    <div class="container">
        <div class="text-center mt-3">
            <h1>Tableaux des biens</h1>
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {

                ?>
                <a href="ajoutbiens.php">
                    <button type="button" class="btn btn-warning">Ajouter un bien immobilier</button>
                </a>

                <?php
            }

            ?>
            <table class="table table-striped table-dark mt-3 text-center">
                <thead>
                <tr>
                    <th scope="col-2">Nom</th>
                    <th scope="col-2">Adresse</th>
                    <th scope="col-1">latitude</th>
                    <th scope="col-1">longitude</th>
                    <th scope="col-2">Description</th>
                    <th scope="col-1">Catégorie</th>
                    <th scope="col-1">Image</th>
                    <th scope="col-2">Action</th>
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
                    <td><img src="src/img/<?php echo $data->bimage ?>" id="img1" alt="img"></td>
                    <td>
                        <?php
                        if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {


                            ?>

                            <a href="update.php?id=<?php echo $data->bid ?>"
                            <button type="button" class="btn btn-primary">Modifier</button>

                            <a href="updatemap.php?id=<?php echo $data->mid ?>"
                            <button type="button" class="btn btn-primary ml-1">Modifier coordonnées</button>


                            <a href="supprimebien.php?id=<?php echo $data->bid ?>"
                            <button type="button" class="btn btn-danger ml-1 mt-1">Supprimer</button>


                            <?php
                        }
                        ?>
                        <a href="affichebien.php?id=<?php echo $data->bid ?>"
                        <button type="button" class="btn btn-success ml-1 mt-1">Voir +</button>
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

<?php
require "footer.php"
?>