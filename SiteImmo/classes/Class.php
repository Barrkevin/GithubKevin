<?php

<<<<<<< HEAD
class accueil
{
    private $var ='<h1 class="text-center mt-3 mb-3"><strong>Bienvenue sur le site Immobilette</strong></h1>';
    public function parler(){
        echo $this->var;
        /*la fonction parler renvoi la variable privée qui affiche un texte*/
    }
}

$bienvenue = new accueil(); /*bienvenue est un nouveau objet accueil*/
$bienvenue->parler(); /*bienvenue prend la fonction parler*/
=======
class Accueil
{
    private $var ='<h1 class="text-center mt-3 mb-3">Bienvenue sur le site Immobilette</h1>';
    public function parler(){
        echo $this->var;
    }
}

$bienvenue = new Accueil();
$bienvenue->parler();
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
