<?php
session_start();
require "bdd/FonctionConnect.php";
<<<<<<< HEAD
$db = connect();
=======
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32


if (isset($_GET["id"])) {
    if (!empty($_GET)) {
        $id = htmlspecialchars(trim($_GET["id"]));
    }
}

if (isset($_GET["idProd"])) {
    $idProd = htmlspecialchars(trim($_GET["idProd"]));
}


require "Header.php";


//var_dump($data);
?>

    <body>
    <div class="container mt-5">
        <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
              action="methodes/MethodeUpdatePhotosBiens.php">
            <div class="p-5">
                <h2 class="text-center"><p>Modification d'un bien immobilier</p></h2>
                <hr id="hr16" class="mb-4">


                <div class="form-group row">
                    <div class="col-8">
                        <input id="nom122" type="text" name="id" class="form-control d-none" value="<?php echo $id; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-8">
                        <input id="idProd" type="text" name="idProd" class="form-control d-none"
                               value="<?php echo $idProd; ?>">
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