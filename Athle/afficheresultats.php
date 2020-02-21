<?php
session_start();
require "config.php";

/*var_dump($_GET);*/

if (isset($_GET["id"])) {   /*le isset vérifie que le transfert se fait bien*/
    if (!empty($_GET)) {   /*if empty -> s'il est vide. !empty -> s'il n'est pas vide, prends le id*/
        $id = htmlspecialchars(trim($_GET["id"]));   /*Convertit les caractères spéciaux en entités HTML*/
    }   /*trim pour effacer les espaces*/
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

$sql = "select resultats.id as rid,resultats.name as rname,resultats.description,categories.name as cname,image,categories.id  from resultats
inner join categories on resultats.category_id = categories.id where resultats.id=:ids";
/*IDS --> Pour vérifier que rien n'a été injecté*/

$req = $db->prepare($sql);
$req->bindParam(":ids", $id);    /*bindParam veut dire remplacement de l'ids par le vrai id*/
$req->execute();


require "header.php"
?>

<div class="container mt-2">
    <div class="text-center mt-3 offset-sm-2 col-8 bg-white border border-secondary">
        <h1>Résultat</h1>
        <hr id="hr16" class="mb-4">
        <div class="container">
            <?php
            while ($data = $req->fetchObject()) {      /* Tant que data = req... fetchObject renvoi directement le tableau*/
            /*echo "<img src=libs/img/" . $data->image . "/>";*/
            ?>
            <img src="libs/img/<?php echo $data->image ?>" class="d-block w-100" id="imgaffiche" alt="img54">

        </div>
        <div class="row">
            <div id="textphoto" class="col-12 mt-3 h5">
                <p>Id du résultat :
                    <br><?php echo $data->rid ?></p>
                <p>Catégorie du résultat :
                    <br><?php echo $data->cname ?></p>
                <p>Nom du résultat :
                    <br><?php echo $data->rname ?></p>
                <p>Description du résultat :
                    <br><br><?php echo $data->description ?></p>
            </div>
        </div>

        <?php
        }
        ?>
        <a href="resultats.php">
            <button type="button" class="btn btn-primary w-100 mt-2 mb-5">
                Retour
            </button>
    </div>
</div>

<?php
require "footer.php"
?>