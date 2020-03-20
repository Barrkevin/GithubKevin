<?php

class database
{
    private $_host = 'mysql:host=localhost;port=8889;dbname=immo;charset=utf8';
    private $_username = 'root';
    private $_password = 'root';
    private $_bdd;

    public function getHost()
    {
        return $this->_host;
    }

    public function setHost($host)
    {
        $this->_host = $host;
    }

    function connect()
    {
    /* On essaye de se connecter à la bdd grâce au try, si on n'y arrive pas la partie catch
        va alors nous afficher un message d'erreur grâce au die erreur */
    /* Pour se connecter à la bdd nous appellons les setter de la variable bdd crée plus haut,
        nous lui passons un  paramètre, l'outil PDO qui contient le login, le mdp et le nom de notre base
    ces derniers sont récupérés par les guetters */
        try {
            $this->setBdd(new PDO($this->getHost(),
                $this->getUsername(),
                $this->getPassword()));
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
