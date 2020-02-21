<?php
session_start();
require "header.php";



if(isset($_POST['mailform']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"kevin.radosz@gmail.com"<kevin.radosz@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				</div>
			</body>
		</html>
		';

        mail("kevin.radosz@gmail.com", "CONTACT - Contact site CSA Avion", $message, $header);
        $msg="Votre message a bien été envoyé !";
    }
    else
    {
        $msg="Tous les champs doivent être complétés !";
    }
}

?>

<link rel="stylesheet" href="css/contact.css">

<div class="container mt-5" id="containercontact">
    <form id="container128" class="offset-sm-2 col-8 bg-white border border-secondary" method="POST">
        <div class="p-5">
            <h2 class="text-center"><p>Nous contacter</p></h2>
            <hr id="hr16" class="mb-4">

            <div class="form-group row">
                <label for="nom" class="col-5 col-form-label">Nom</label>
                <div class="col-7">
                    <input id="nomutilisateur" type="text" name="nom" class="form-control" placeholder="Votre Nom"
                           value="<?php if (isset($_POST['nom'])) {
                               echo $_POST['nom'];
                           } ?>"/>
                </div>
            </div>



            <div class="form-group row">
                <label for="mail" class="col-5 col-form-label">Email</label>
                <div class="col-7">
                    <input id="mailutilisateur" type="text" name="mail" class="form-control"
                           placeholder="Votre Email" value="<?php if (isset($_POST['mail'])) {
                        echo $_POST['mail'];
                    } ?>"/>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-5 col-form-label">Message</div>
                <div class="col-7">
                    <textarea id="messageutilisateur" name="message" class="w-100"
                              required><?php if (isset($_POST['message'])) {
                            echo $_POST['message'];
                        } ?></textarea>
                </div>
            </div>

            <input type="submit" class="btn btn-warning w-100" name="mailform" Value=Envoyer !">
            <a href="index.php">
                <button type="button" class="btn btn-primary w-100 mt-2 mb-5">
                    Retour
                </button></a>
        </div>
    </form>

    <?php
    if(isset($msg))
    {
        echo $msg;
    }
    ?>
</div>

<?php
require "footer.php"
?>
