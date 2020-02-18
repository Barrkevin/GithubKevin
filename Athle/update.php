<?php
require "fonction.php";


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}


$sql = "select resultats.id as rid,resultats.name as rname,resultats.description,categories.name as cname,image,categories.id  from resultats
inner join categories on resultats.category_id = categories.id;";


$req = $db->prepare($sql);  /*Prépare une requête SQL à être exécuter par la méthode PDO vu plus au dessus*/
$req->bindParam(":ids", $id);
$req->execute();


require "header.php";

$data = $req->fetch();
//var_dump($data);
?>

<div class="container mt-5">
    <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
          action="methodeupdate.php">
        <div class="p-5">
            <h2 class="text-center"><p>Modification des résultats</p></h2>
            <hr id="hr16" class="mb-4">

            <div class="form-group row">
                <div class="col-8">
                    <input id="nom122" type="text" name="id" class="form-control d-none" value="<?php echo $id; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Nom:</label>
                <div class="col-8">
                    <input type="text" name="nom" class="form-control" value="<?php echo $data["rname"] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea id="description2" type="text" name="descript" class="form-control">
                        <?php echo $data["description"] ?>
                    </textarea>
                </div>
            </div>


            <div class="form-group row">
                <label for="adresse05" class="col-4 col-form-label">Catégorie:</label>
                <div class="col-8">
                    <input id="categ18" type="text" name="categ" class="form-control"
                           placeholder="1 -> Hors stade. 2 -> Stade.">
                </div>
            </div>

            <div class="form-group row">
                <label for="picture" class="col-4 col-form-label">Image:</label>
                <div class="col-8">
                    <input name="picture" type="file">
                </div>
            </div>



            <button type="submit" class="btn btn-warning w-100">
                Envoyer
            </button>
            <a href="resultats.php">
                <button type="button" class="btn btn-primary w-100 mt-2">
                    Retour
                </button>
            </a>
        </div>
    </form>
</div>


    <?php
require "footer.php"
?>