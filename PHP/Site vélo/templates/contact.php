<?php
<!doctype html>
<html lang="fr">
<head>
    <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../libs/css/contactcss.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="../index.html">
            <img src="../libs/img/logo.png" alt="logo" class="rounded-circle"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
               </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="produits.html" id="nav3"><h5>Produits</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" id="nav4"><h5>Contact</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html" id="nav5"><h5>Se connecter</h5></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

<footer>
    <div class="container-fluid mt-5 bg-dark" id="hcontainer">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" id="nav1" href="#"><h4>Conditions générales de vente</h4></a>
            <a class="nav-item nav-link" id="nav2" href="https://fr-fr.facebook.com/login/"><h4>Facebook</h4></a>
         </nav>
        </div>
    </div>
</footer>

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
?>