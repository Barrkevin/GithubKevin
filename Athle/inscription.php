<?php
require "fonction.php";

if (isset($_POST['forminscription'])) {         /*Reprend les éléments de la page inscription*/
    $pseudo = htmlspecialchars($_POST['pseudo']);  /*Fonction qui permet d'enlever les caractères html etc
  et permet d'éviter les injections */
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdp2 = htmlspecialchars($_POST['mdp2']);

    /*Si les variables ne sont pas vide*/
    if (!empty($_POST['pseudo'])
        AND !empty($_POST['mail'])
        AND !empty($_POST['mail2'])
        AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {

        $pseudolength = strlen($pseudo);    /*Calcul la taille du pseudo*/

        if ($pseudolength <= 255) {     /*Si le pseudo fait moins de 255 on continue si non erreur */

            if ($mail == $mail2) {  /*Si les deux mails sont pareil on continue si non erreur */

                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) { /* Si le mail est bon on continue si non erreur */

                    $reqmail = $db->prepare("SELECT * FROM membres WHERE mail = ?");

                    $reqmail->execute(array($mail));

                    $mailexist = $reqmail->rowCount();

                    if ($mailexist == 0) {

                        if ($mdp == $mdp2) {
                            /* Si les deux mails correspondent on continue
                            on rentre un membre, on exécute sous forme de tableau*/

                            $insertmbr = $db->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");

                            $insertmbr->execute(array($pseudo, $mail, $mdp));

                            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";

                        } else {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse mail déjà utilisée !";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Vos adresses mail ne correspondent pas !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

    require "header.php"
?>
<body>

<div class="container mt-5">
    <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST"
          action="">
        <div class="p-5">
            <h2 class="text-center">
                <p>Inscription</p>
            </h2>
            <hr id="hr16" class="mb-4">
            <div class="form-group row">
                <label for="pseudo" class="col-4 col-form-label">Pseudo</label>
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="mail" class="col-4 col-form-label">Email :</label>
                <div class="col-8">
                    <input type="email" class="form-control" placeholder="Votre mail" id="mail" name="mail"value="<?php if(isset($mail)) { echo $mail; } ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label for="mail2" class="col-4 col-form-label">Confirmation du mail :</label>
                <div class="col-8">
                    <input type="email" class="form-control" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label for="mdp" class="col-4 col-form-label">Mot de passe</label>
                <div class="col-8">
                    <input type="password" class="form-control" placeholder="Votre mot de passe" id="mdp" name="mdp">
                </div>
            </div>

            <div class="form-group row">
                <label for="mdp2" class="col-4 col-form-label">Confirmation du mot de passe :</label>
                <div class="col-8">
                    <input type="password" id="mdp2" name="mdp2" class="form-control"
                           placeholder="Confirmez votre mot de passe">

                </div>
            </div>


            <button type="submit" name="forminscription" class="btn btn-warning w-100">
                Envoyer
            </button>
            <a href="index.php">
                <button type="button" class="btn btn-primary w-100 mt-2">
                    Retour
                </button>
            </a>
        </div>
    </form>
    <?php
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>
</div>

<?php
require "footer.php"
?>