<?php
session_start();
require "header.php";

?>


    <div class="container">
        <h1 class="text-center">Qu'est-ce que le dopage ?</h1>
        <hr id="hr01">

        <div class="row">
            <div class="col-10 text-center ">
                <p>
                « Le dopage est l’utilisation par un sportif d’une substance ou d’un procédé interdit figurant sur la liste définie par la réglementation en vigueur que ce soit à l’entraînement ou lors d’une compétition (la liste peut être consultée sur le site internet dans la rubrique réglementation).

                <br>Cette liste est une succession de noms chimiques ; il est donc difficile de savoir si un médicament prescrit par un médecin est autorisé ou non.
                    Afin de savoir si un médicament précis est autorisé <a href="http://medicaments.afld.fr/" target="_blank">cliquez ici</a>

                <br>Attention : en cas de doute se renseigner auprès de son médecin, le module de recherche n’étant pas exhaustif.

                    <br>Il est à noter que la liste française des méthodes et produits interdits et la liste de l’Agence Mondiale Antidopage AMA sont désormais identiques »
                </p>

            </div>
            <div class="col-2">
                <a href="https://www.wada-ama.org/fr/a-propos" target="_blank"><img src="libs/img/dopage.jpeg"></a>
            </div>
        </div> <!--fermeture de la première row-->

        <hr id="07">

        <div class="row">

            <div class="col-6">
                <img src="libs/img/dopage2.jpeg">
            </div>

            <div class="col-6">
                <a href="https://medicaments.afld.fr/" target="_blank"><img src="libs/img/dopage3.jpeg"></a>
            </div>

        </div>

    </div> <!--fermeture du container-->



<?php
require "footer.php"
?>