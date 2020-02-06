<?php
echo 'toto';

/*Prof:

// variables
$nom = "Toto";
$prenom = "Dupond";

$tva = "20%";
$tva20 = 20;
$tva02 = 0.2;

$bool = true;

$br = "<br>";

// constantes
//je déclare
define("FOO","something");
define("TVA20",0.2);


// tableaux
$arrayPrenom = array("Jean", "Pierre","Michel");
$arrayPrenoms = ["Jean", "Pierre","Michel"];

$array = array(1, 3, "toto");
//var_dump($array);



$arrayNomPrenom = array(
    "Jean" => "Dupond",
    "Pierre" => "Petin",
    "Michel" => "Leclercq"
);

var_dump($arrayNomPrenom);

// affichage
//echo $nom." ".$prenom;
echo $br;
//var_dump($nom." ".$prenom);
echo $br;

//var_dump($arrayPrenom);
echo $br;
//var_dump($arrayPrenoms);
echo $br;



//print_r($arrayPrenom);
echo $br;
//var_dump($bool);
//echo $br;
//echo $bool;
//echo $br;

// j'utilise constante
echo "Ma constante vaut : ".FOO;
echo $br;


// boucles
for($i = 0; $i<count($arrayPrenom); $i++ ){
    //echo $arrayPrenom[$i].$br;
}
echo 'v1';

foreach ($arrayNomPrenom as $key => $value){
//foreach ($arrayNomPrenom as $nom => $prenom){
    ?><!--
    <p><?=$key." ".$value?></p>
    <p><?php /*echo $key." ".$value?></p>
    --><?php
/*}

echo 'v2';
foreach ($arrayNomPrenom as $key => $value){
//foreach ($arrayNomPrenom as $nom => $prenom){
    echo "<p>".$key." ".$value."</p>";

}*/


/*Créer des variables :

1) nom prénom cp de la ville puis afficher

2) Créer des constantes afpa rue, afpa numrue, ,afpa adresse rue ,afpa cp ,afpa ville. puis leurs donner une valeur et afficher*/


    $nom = "radosz";
    $prenom = "kevin";
    $code_postal = 62210;
    $br ="<br>";
    echo $br;
    echo $nom;
    echo $br;
    echo $prenom;
    echo $br;
    echo $code_postal;
    echo $br;
    echo $br;

    $num_rue = 0;
    $nom_rue = "Rue léon blum";
    $code_postal = "62800";
    $ville = "Liévin";

    define('AFPA_NUM_RUE','0');
    define('AFPA_NOM_RUE','Rue Léon Blum');
    define('AFPA_CODE_POSTAL','62800');
    define('AFPA_VILLE','Liévin');
    echo AFPA_NUM_RUE;
    echo $br;
    echo AFPA_NOM_RUE;
    echo $br;
    echo AFPA_CODE_POSTAL;
    echo $br;
    echo AFPA_VILLE;
    echo $br;
    echo $br;


/*Un tableau associatif :*/

    $ville = ["Lille", "Paris", "Arras"];
    $cpville = array(
        "5900" => "Lille",
        "75000" => "Paris",
        "62100" => "Arras"
    );

    for($i = 0; $i < count ($ville); $i++){
        echo $ville[$i].$br;
    }

    foreach($cpville as $ville){
        return $ville;
}



