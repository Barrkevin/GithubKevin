<?php
session_start();
require "bdd/FonctionConnect.php";
$db = connect();


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}


/*$sql = "select biens.id as bid,biens.adresse,biens.name as bname,biens.description,latitude,longitude,categories.name as cname,image,categories.id  from biens
inner join categories on biens.category_id = categories.id where biens.id = :ids;";*/

/*$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription, map.latitude AS mlat,
map.longitude AS mlong, categories.name AS cname, biensimmo.image AS bimage, categories.id
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id
INNER JOIN map ON biensimmo.map_id = map.id WHERE biensimmo.id = :ids;";*/

$sql = "SELECT biensimmo.id AS bid, biensimmo.adresse AS badresse, biensimmo.name AS bname, biensimmo.description AS bdescription,
categories.name AS cname, map.id AS mid, map.latitude AS mlat, map.longitude AS mlong, categories.id,
media.id as mdid, media.photos as mdphotos
FROM biensimmo
INNER JOIN categories ON biensimmo.category_id = categories.id
INNER JOIN map ON biensimmo.map_id = map.id
INNER JOIN media ON biensimmo.media_id = media.id
WHERE biensimmo.id = :ids";


$req = $db->prepare($sql);  /*Prépare une requête SQL à être exécuter par la méthode PDO vu plus au dessus*/
$req->bindParam(":ids", $id);
$req->execute();
$data = $req->fetch();


$sql = "SELECT * FROM categories";
$req = $db->prepare($sql);
$req->execute();
$categories = [];
while ($datacateg = $req->fetchObject()) {
    $categories[] = $datacateg;
}

$sql = "SELECT * FROM biensimmo WHERE id=:ids;";
$req = $db->prepare($sql);
$req->bindParam(":ids", $id);
$req->execute();

$biensimmo = $req->fetchObject();


require "Header.php";


//var_dump($data);
?>

    <body>
    <div class="container mt-5">
        <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
              action="methodes/MethodeUpdateBiens.php">
            <div class="p-5">
                <h2 class="text-center"><p>Modification d'un bien immobilier</p></h2>
                <hr id="hr16" class="mb-4">


                <div class="form-group row">
                    <div class="col-8">
                        <input id="nom122" type="text" name="id" class="form-control d-none" value="<?php echo $id; ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-4 col-form-label">Nom:</label>
                    <div class="col-8">
                        <input type="text" name="nom" class="form-control" value="<?php echo $data["bname"] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-4 col-form-label">Adresse:</label>
                    <div class="col-8">
                        <input id="adresse01" type="text" name="adressage" class="form-control"
                               value="<?php echo $data["badresse"] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nom122" class="col-4 col-form-label">Latitude :</label>
                    <div class="col-8">
                        <input id="latitude" type="text" name="lat" class="form-control"
                               value="<?php echo $data["mlat"] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-4 col-form-label">Longitude</label>
                    <div class="col-8">
                        <input id="longitude" type="text" name="long" class="form-control"
                               value="<?php echo $data["mlong"] ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-4 col-form-label">Description</label>
                    <div class="col-8">
                         <textarea id="description18" type="text" name="descript" class="form-control">
                            <?php echo $data["bdescription"] ?>
                         </textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="categ001" class="col-4 col-form-label">Catégorie:</label>
                    <div class="col-8">
                        <select type="text" class="form-control" name="categ" value=<?= $biensimmo->category_id; ?>>
                            <?php
                            foreach ($categories as $categ) {
                                ?>
                                <option value="<?= $categ->id ?>"><?= $categ->name ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="picture" class="col-4 col-form-label">Image:</label>
                    <div class="col-8">
                        <input type="hidden" name="" value="100000000">
                        <!--limite le fichier a un certain nombre de KO-->
                        <input type="file" name="picture">
                    </div>
                </div>


                <button type="submit" class="btn btn-warning w-100">
                    Envoyer
                </button>
                <a href="TableauBiens.php">
                    <button type="button" class="btn btn-primary w-100 mt-2">
                        Retour
                    </button>
                </a>
            </div>
        </form>
    </div>
    </body>


<?php
require "Footer.php"
?>