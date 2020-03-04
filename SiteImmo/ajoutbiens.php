<?php
session_start();
require "fonction.php";


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}

$categ = "SELECT * FROM categories";
$req = $db->prepare($categ);
$req->execute();

$categories = [];
while ($datacateg = $req->fetchObject()) {
    $categories[] = $datacateg;
}



$biens = "SELECT * FROM biensimmo WHERE id=:ids;";
$req = $db->prepare($biens);
$req->bindParam(":ids", $id);
$req->execute();


$biensimmo = $req->fetchObject();


require "header.php";


//var_dump($data);
?>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
    </head>
<body>

<div class="container mt-5">
    <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
          action="methodeajouter.php">
        <div class="p-5">
            <h2 class="text-center"><p>Ajout d'un bien immobilier</p></h2>
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
                <label class="col-4 col-form-label">Adresse</label>
                <div class="col-8">
                    <input id="description1" type="text" name="adressage" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="nom122" class="col-4 col-form-label">Latitude :</label>
                <div class="col-8">
                    <input id="latitude" type="text" name="lat" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Longitude</label>
                <div class="col-8">
                    <input id="longitude" type="text" name="long" class="form-control">
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
                    <input type="hidden" value="100000000"> <!--limite le fichier a un certain nombre de KO-->
                    <input type="file" name="picture">
                    <input type="submit" name="envoyer" value="Envoyer le fichier">
                </div>
            </div>

            <button type="submit" class="btn btn-warning w-100">
                Envoyer
            </button>
            <a href="bienimo.php">
                <button type="button" class="btn btn-primary w-100 mt-2">
                    Retour
                </button>
            </a>
        </div>
    </form>
</div> <!--fermeture div container principal-->

<?php
require "footer.php"
?>