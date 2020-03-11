<?php

class Accueil
{
    private $var ='<h1 class="text-center mt-3 mb-3">Bienvenue sur le site Immobilette</h1>';
    public function parler(){
        echo $this->var;
    }
}

$bienvenue = new Accueil();
$bienvenue->parler();
