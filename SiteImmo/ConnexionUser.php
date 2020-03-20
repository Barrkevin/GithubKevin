<?php
session_start();

require "bdd/FonctionConnect.php";
$db = connect();


if (isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = ($_POST['mdpconnect']);
    if (!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $db->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['role'] = $userinfo['role_id'];
            header('location: TableauBiens.php');
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

require "Header.php"
?>

    <link rel="stylesheet" href="src/css/Connexion.css">

    <body>
    <div class="container mt-5">
        <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
              action="">
            <div class="p-5">
                <h2 class="text-center">
                    <p>Connexion</p></h2>
                <hr id="hr16" class="mb-4">

                <div class="form-group row">
                    <label for="mail" id="email12" class="col-5 col-form-label">Email</label>
                    <div class="col-7">
                        <input type="email" id="mail01" name="mailconnect" class="form-control" placeholder="Mail">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mdp" class="col-5 col-form-label">Mot de passe</label>
                    <div class="col-7">
                        <input type="password" id="mdp01" class="form-control" name="mdpconnect"
                               placeholder="Mot de passe">
                    </div>
                </div>

                <button type="submit" name="formconnexion" value="Se connecter" class="btn btn-warning w-100">
                    Envoyer
                </button>
                <a href="Index.php">
                    <button type="button" class="btn btn-primary w-100 mt-2 mb-5">
                        Retour
                    </button>
                </a>
            </div>

        <?php
        if (isset($erreur)) {
            echo'<strong><font color="red">'.$erreur.'</font></strong>';
        }
        ?>
        </form>
    </div>
    </body>

<?php
require "Footer.php"
?>