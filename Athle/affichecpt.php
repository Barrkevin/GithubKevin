<?php
session_start();
require "fonction.php";

/*var_dump($_GET);*/

if (isset($_GET["id"])) {   /*le isset vérifie que le transfert se fait bien*/
    if (!empty($_GET)) {   /*if empty -> s'il est vide. !empty -> s'il n'est pas vide, prends le id*/
        $id = htmlspecialchars(trim($_GET["id"]));   /*Convertit les caractères spéciaux en entités HTML*/
    }   /*trim pour effacer les espaces*/
}


$sql = "select competition.id as cptid,competition.name as cptname,competition.description,categories.name as cname,categories.id  from competition
inner join categories on competition.category_id = categories.id where competition.id = :ids;";
/*IDS --> Pour vérifier que rien n'a été injecté*/

$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();


require "header.php"
?>
    <link rel="stylesheet" href="css/afficheresultats.css">

    <div class="container mt-4">
<?php
while ($data = $req->fetchObject()) {      /* Tant que data = req... fetchObject renvoi directement le tableau*/

    ?>



    <div class="card text-center">
        <div class="card-header">
            <h5 class="card-title mb-5 mt-2">
                <?php echo $data->cptname ?></h5>
        </div>
        <div class="card-body">

            <p class="card-text"><?php echo $data->description ?></p>
            <div class="card-footer text-muted">
                <a href="index.php" class="btn btn-primary">Retour aux résultats</a>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php
}
?>


<?php
require "footer.php"
?>