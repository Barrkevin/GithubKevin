<?php
require "main/head.php";
?>

    <div class="container">
        <div class="text-center mt-3">
            <h1>Connexion :</h1>
            <hr id="hr15" class="mb-4">
        </div>

        <div class="col-12 w-25 mt-3 mx-auto">
            <input type="text" class="form-control" placeholder="Email" id="email122">
        </div>

        <div class="col-12 w-25 mt-3 mx-auto">
            <input type="text" class="form-control" placeholder="Mot de passe" id="email123">
        </div>

        <div class="col-12 w-25 mt-3 mx-auto">
            <button id="button55" type="button" class="btn btn-info btn-lg btn-block">Connexion</button>
        </div>

        <div class="col-12 w-25 mt-3 mx-auto">
            <button id="button56" type="button" class="btn btn-dark btn-lg btn-block">Mot de passe oublié</button>
        </div>

        <div class="col-12 w-25 mt-3 mx-auto">
            <button id="button57" type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal"
                    data-target="#modal1">
                S'inscrire
            </button>
        </div>

        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1titre" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal1titre">Page d'inscription</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse email :</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe :</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Numéro de téléphone :</label>
                                <input type="numero" class="form-control" id="Numtel">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Adresse :</label>
                                <input type="adresse" class="form-control" id="Adresse">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Code postal :</label>
                                <input type="codepostal" class="form-control" id="CP">
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-info">Envoyer</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    require "main/footer.php";
    ?>