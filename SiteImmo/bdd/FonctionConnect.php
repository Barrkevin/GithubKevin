<?php

require "ConfigConnect.php";
function connect()
{
    try {
        $db = new PDO('mysql:host=' . LOCALHOST . ';dbname=' . DATABASE . ';charset=utf8', USER, MDP);
        /*echo 'ok';*/
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
<<<<<<< HEAD
}
=======
}

$db = connect();

>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
