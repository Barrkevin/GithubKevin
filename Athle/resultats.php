<?php
session_start();
require "fonction.php";

/*Pour aller chercher quelque chose de précis :*/
$sql = "select resultats.id as rid,resultats.name as rname,resultats.description,categories.name as cname,image,categories.id  from resultats
inner join categories on resultats.category_id = categories.id;";
/*On sélectionne la table products, on va chercher l'id on lui attribu un nom, en l'occurence ici "pid"*/


$req = $db->prepare($sql);
$req->execute();


require "header.php";
?>


    <link rel="stylesheet" href="css/resultats.css">
    <div class="container">
        <div class="text-center mt-3">
            <h1>Tableau des résultats</h1>
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {

                ?>
                <a href="ajoutresultats.php">
                    <button type="button" class="btn btn-warning">Ajouter un résultat</button>
                </a>

                <?php
            }

            ?>
            <table class="table table-striped table-dark mt-3 text-center">
                <thead>
                <tr>
                    <th scope="col-2">Nom</th>
                    <th scope="col-2">Description</th>
                    <th scope="col-1">Catégorie</th>
                    <th scope="col-4">Image</th>
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
                    <td><?php echo substr($data->rname, 0, 50) ?></td>
                    <td><?php echo substr($data->description, 0, 50) ?></td>
                    <td><?php echo $data->cname ?></td>
                    <td><img src="libs/img/<?php echo $data->image ?>" id="img1" alt="img"></td>
                    <td>
                        <?php
                        if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {


                            ?>

                            <a href="update.php?id=<?php echo $data->rid ?>"
                            <button type="button" class="btn btn-primary">Modifier</button>


                            <a href="supprimeresultats.php?id=<?php echo $data->rid ?>"
                            <button type="button" class="btn btn-danger ml-2">Supprimer</button>


                            <?php
                        }
                        ?>
                        <a href="afficheresultats.php?id=<?php echo $data->rid ?>"
                        <button type="button" class="btn btn-success ml-2">Voir +</button>
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