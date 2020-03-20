<?php
session_start();
require "fonction.php";


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}


$sql = "select competition.id as cptid,competition.name as cptname,competition.description,categories.name as cname,categories.id  from competition
inner join categories on competition.category_id = categories.id where competition.id = :ids;";


$req = $db->prepare($sql);  /*Prépare une requête SQL à être exécuter par la méthode PDO vu plus au dessus*/
$req->bindParam(":ids", $id);
$req->execute();
$data = $req->fetch();


$sql = "SELECT * FROM categories";
$req = $db->prepare($sql);
$req->execute();
$categories = [];
while ($datacateg = $req->fetchObject()){
    $categories[]=$datacateg;
}

$sql = "SELECT * FROM competition WHERE id=:ids;";
$req = $db->prepare($sql);
$req->bindParam(":ids", $id);
$req->execute();

$competition = $req->fetchObject();


require "header.php";



//var_dump($data);
?>

    <div class="container mt-5">
        <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
              action="methodeupdatecptvnr.php">
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
                        <input type="text" name="nom" class="form-control" value="<?php echo $data["cptname"] ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-4 col-form-label">Description</label>
                    <div class="col-8">
                        <textarea id="description18" type="text" name="descript" class="form-control">
                            <?php echo $data["description"] ?>
                        </textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="categ001" class="col-4 col-form-label">Catégorie:</label>
                    <div class="col-8">
                        <select type="text" class="form-control" name="categ" value=<?= $competition->category_id; ?>>
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



                <button type="submit" class="btn btn-warning w-100">
                    Envoyer
                </button>
                <a href="index.php">
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