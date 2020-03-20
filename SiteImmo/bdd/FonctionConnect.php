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
}