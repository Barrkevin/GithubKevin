<?php

require "config.php";   /*On appelle le fichier config*/


/*var_dump($_POST);*/

function connect()
{
    try {
        $db = new PDO('mysql:host=' . LOCALHOST . ';dbname=' . DATABASE . ';charset=utf8', USER, MDP);
        /*echo 'ok';*/
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}


$db = connect();


if (isset($_POST['forminscription'])) {         /*Reprend les éléments de la page inscription*/
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdp2 = htmlspecialchars($_POST['mdp2']);

    /*Si le pseudo, le mail et le mot de passe n'existe pas*/
    if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {

        $pseudolength = strlen($pseudo);    /*Calcul la taille du pseudo*/

        if ($pseudolength <= 255) {     /*Si le pseudo fait plus de 255carac*/

            if ($mail == $mail2) {  /*Si les deux mails sont pareil */

                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

                    $reqmail = $db->prepare("SELECT * FROM membres WHERE mail = ?");

                    $reqmail->execute(array($mail));

                    $mailexist = $reqmail->rowCount();

                    if ($mailexist == 0) {

                        if ($mdp == $mdp2) {

                            $insertmbr = $db->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");

                            $insertmbr->execute(array($pseudo, $mail, $mdp));

                            $erreur = "Votre compte a bien été créé !";

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

header("location: connexion.php");


/*https://www.youtube.com/watch?v=s7qtAnH5YkY*/

/*https://www.youtube.com/watch?time_continue=231&v=OHjkg_rifTw&feature=emb_title*/


