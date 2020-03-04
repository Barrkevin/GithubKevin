<?php
session_start();
require "header.php"
?>

<div class="container mt-5">
    <img src="src/img/m6.jpg" class="d-block w-100" alt="m6" id="imagetete6">
</div>

<div class="container">
    <div class="row">
        <div id="textphoto" class="col-12 mt-3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="titre" id="iti">
        <h4>Ci-dessous la position géographique du bien immobilier.</h4>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="maps6">
            </div>
        </div>
    </div>
</div>

    <script src="src/js/mapbien6solo.js" defer></script>

<?php
require "footer.php"
?>