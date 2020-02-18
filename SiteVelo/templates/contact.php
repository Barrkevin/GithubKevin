<?php
require "main/head.php";
?>

    <div class="container mt-5" >
        <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="GET">
            <div class="p-5">
                <h2 class="text-center"><p>Nous contacter :</p></h2>
                <hr id="hr16" class="mb-4">

                <div class="form-group row">
                    <label for="nom122" class="col-4 col-form-label">Nom:</label>
                    <div class="col-8">
                        <input id="nom122" type="text" name="nom" class="form-control" placeholder="Votre Nom">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="prenom18" class="col-4 col-form-label">Prénom:</label>
                    <div class="col-8">
                        <input id="prenom18" type="text" name="prenom" class="form-control" placeholder="Votre Prénom">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="datenaissance08" class="col-4 col-form-label">Date de naissance:</label>
                    <div class="col-8">
                        <input type="text" name="datenaissance" class="form-control" id="datenaissance08"
                               placeholder="JJ/MM/AAAA">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="adresse05" class="col-4 col-form-label">Adresse:</label>
                    <div class="col-8">
                        <input id="adresse05" type="text" name="adresse" class="form-control"
                               placeholder="Votre adresse">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-4 col-form-label">Votre message:</div>
                    <div class="col-8">
                        <textarea id="story" class="w-100"></textarea>
                    </div>
                </div>

                <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#modal1">
                    Envoyer
                </button>
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1titre"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal1titre">Informations.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!--Modal pour informer que le message a bien été envoyé-->
                            <div class="modal-body">
                                <p class="text-center">Votre message a bien été envoyé, notre équipe vous répondra trés
                                    bientôt.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
require "main/footer.php";
?>