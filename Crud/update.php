<?php
require "fonction.php";


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}


$sql = "select products.id as pid,products.name as pname,products.description,products.price,categories.name as cname,image,categories.id from products
inner join categories on products.category_id = categories.id where products.id = :ids";


$req = $db->prepare($sql);  /*Prépare une requête SQL à être exécuter par la méthode PDO vu plus au dessus*/
$req->bindParam(":ids", $id);
$req->execute();

?>

<!doctype html>
<html lang="fr">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
$data = $req->fetch();
//var_dump($data);
?>

<div class="container mt-5">
    <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
          action="methodeupdate.php">
        <div class="p-5">
            <h2 class="text-center"><p>Modification du produit</p></h2>
            <hr id="hr16" class="mb-4">

            <div class="form-group row">
                <div class="col-8">
                    <input id="nom122" type="text" name="id" class="form-control d-none" value="<?php echo $id; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Nom:</label>
                <div class="col-8">
                    <input type="text" name="nom" class="form-control" value="<?php echo $data["pname"] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <input id="description18" type="text" name="descript" class="form-control"
                           value="<?php echo $data["description"] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 col-form-label">Prix:</label>
                <div class="col-8">
                    <input type="text" name="prix" class="form-control" value="<?php echo $data["price"] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="adresse05" class="col-4 col-form-label">Catégorie:</label>
                <div class="col-8">
                    <input id="categ18" type="text" name="categ" class="form-control"
                           placeholder="1 -> Fashion. 2 -> Electronics. 3 -> Motors">
                </div>
            </div>

            <div class="form-group row">
                <label for="picture" class="col-4 col-form-label">Image:</label>
                <div class="col-8">
                    <input name="picture" type="file">
                </div>
            </div>


            <!--<div class="form-group row">
                <label class="col-4 col-form-label">Catégorie:</label>
                <div class="col-8">
                    <input type="text" name="categ" class="form-control" value="<?php /*echo $data["cname"] */ ?>">
                </div>
            </div>-->

            <button type="submit" class="btn btn-warning w-100">
                Envoyer
            </button>
            <a href="profil.php">
                <button type="button" class="btn btn-primary w-100 mt-2">
                    Retour
                </button>
            </a>
        </div>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>