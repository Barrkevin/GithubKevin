<?php



$ville = ["Lille", "Paris", "Arras"];
$cpville = array(
    "5900" => "Lille",
    "75000" => "Paris",
    "62100" => "Arras"
);


?>



<!doctype html>
<html lang="fr">
<head>
    <title>Tableaux</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="text-center mt-3">
        <h1>Tableau Ville</h1>
<table class="table table-striped table-dark mt-3">
    <thead>
    <tr>
        <th scope="col">cp</th>
        <th scope="col">ville</th>
    </tr>
    </thead>
        <?php   /*On ouvre la balise php*/
foreach($cpville as $cp => $ville){   /*On appelle la "fonction" cpville */
    ?>
    <tbody>
    <tr>
        <td><?=$cp?></td> <!-- < ? = Correspond a un echo, dans ce td on intègre les cp -->
        <td><?=$ville?></td>   <!--Dans ce td on intègre les ville-->
    </tr>
    </tbody>
    <?php
}       /*On ferme la balise php*/
    ?>
</table>
</div>
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