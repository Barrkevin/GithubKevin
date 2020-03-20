<?php
session_start();
require "fonction.php";


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}

$sql = "SELECT * FROM categories";
$req = $db->prepare($sql);
$req->execute();
$categories = [];
while ($datacateg = $req->fetchObject()) {
    $categories[] = $datacateg;
}

$sql = "SELECT * FROM competition WHERE id=:ids;";
$req = $db->prepare($sql);
$req->bindParam(":ids", $id);
$req->execute();

$competition = $req->fetchObject();


require "header.php";


/*var_dump($competition);*/
?>


<div class="container mt-5">
    <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
          action="methodeajoutcompet.php">
        <div class="p-5">
            <h2 class="text-center"><p>Ajout d'une competition a venir</p></h2>
            <hr id="hr16" class="mb-4">

            <div class="form-group row">
                <div class="col-8">
                    <input id="nom122" type="text" name="id" class="form-control d-none" value="<?php echo $id ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="nom122" class="col-4 col-form-label">Nom:</label>
                <div class="col-8">
                    <input id="nom18" type="text" name="nom" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea id="description1" type="text" name="descript" class="form-control">
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