// Déclarer une variable
/*
let lastName;
let firstName = "Bill"; /!*déclaration d'une variable*!/
lastName = "Gates"; /!*affection valeur à la variable*!/
console.log(firstName + " " +lastName);

// Déclaration d'une constante
const fullName = firstName + " " + lastName;

// Autre écriture
console.log(fullName);

// Bloc try catch pour gérer les erreurs

try{fullName = "Steve Jobs";}
catch (error) {  // Sert a capturer l'erreur
    console.log(error);  // La valeur d'une constante ne peut être modifié
}
finally{

}

let bp;
*/




// Types JS
/*
let age, isMajor = false, nom ="undefined", prenom = "Kevin";
let type = typeof (age); // Undefinited
console.log(type);

type = typeof (prenom); // String
console.log(type);

type = typeof (isMajor); // Boolean
console.log(type);

prenom = 20; // Typage dynamique
type = typeof(prenom);
console.log(type); // Number

age = 20;
type = typeof(age);
console.log(type); // String

let integer = parseInt(age); // Conversion d'une chaine en entier
console.log(typeof(integer)); //Number

let real = parseFloat(age); // Conversion d'une chaine en réel
console.log(typeof(real)); // Number

integer = parseInt("Hello");
console.log(integer); // NaN
console.log(typeof(integer)); // Nan est de type number
let isNotNumber = isNaN((integer)); // La fonction isNan permet de vérifier si une variable est NaN (not a number)
console.log(isNotNumber);//true

isNotNumber = isNaN((10.2));
console.log(isNotNumber); // False, car 10.2 est un nombre

isNotNumber = isNaN(true);
console.log(isNotNumber); // False, pourtant true n''est pas un nombre

let bp;
*/



// Les Opérateurs Numérique et d'affectation : + - * / ++ -- += -= *= /=
/*
let age = 10;
ag += 5; //15
let resultat = 5/0;
console.log(resultat); //infinity
console.log(typeof(resultat)); //number

// De comparaison : < > <= |= <= !== ===
let test = "10" == 10;
console.log(test); // Egalité de la valeur

test = "10" == 10;
console.log(test); // Egalité de valeur et de type
*/



// Créer une fonction qui écrit un message (passé en paramètre) dans la console
/*
function writeInConsole(message){

    console.log(message);
}
// J'utilise ma fonction
writeInConsole("Steve");
writeInConsole("Jobs");
*/


// Ecrire une fonction qui vérifie qu'une variable est bien un nombre, On a vu que isNaN ne fonctionnait pas pour tout, ex : isNaN(true) vaut false //

/*
function isNumber(expr){ //Expr pour expression
    let valeur = parseFloat(expr); // Valeur prend ParseFloat (conversion d'une chaîne en réel nombre flottant)
   // console.log(valeur);
    if(isNaN(valeur)){ // Si ce n'est pas un nombre (de la valeur) alors retourne faux, donc boucle
        return false;
    }
    else{ // Si non retourne vrai, on sort
        return true;
    }

}
// Indice : Utiliser les fonctions parseFloat() et isNaN()
let test = isNumber("text");
test = isNumber(true);
test = isNumber(10);
test = isNumber(10.2);
*/


// Création d'une fonction (un outil)
/*
function countChar(text){
    return text.length; // Retourner le nombre de caractères
}

function main(){ // Création d'une autre fonction qui va utiliser la première
    let textesaisi = prompt ("Bonjour, saisissez du texte ou des nombres."); // Affichage d'un texte et renvoi du message
    let resultat = countChar(textesaisi); // Resultat éxécute avec la fonction countChar (qui indique la longueur du texte) avec les éléments du texte saisi
    alert(resultat); // Affichage du let résultat
}
main(); // Exécution. S'il n'y a pas ça, il ne se passe rien.



function demandeprenom(text){
    return text;
}

function demandenom(text){
    return text;
}
*/

/*
function prenomnom(){
    let textesaisiprenom = prompt ("Bonjour, saisissez votre prénom");
    let textesaisinom = prompt("Saisissez votre nom");
    /!*let resultat1 = demandeprenom(textesaisiprenom);
    let resultat2 = demandenom(textesaisinom);*!/
    alert(textesaisiprenom + textesaisinom);
}
prenomnom(); // Exécution
*/


// Créer une fonction qui renvoi true si le nombre est >=0, false si le nombre est <0//
/*
function nombre(){
    let demandenombre = prompt("Bonjour, saisissez un nombre"); // demandenombre prend la valeur entrer par l'utilisateur
    while(isNumber(demandenombre) == false){ // Tant que demande nombre n'obtient pas un nombre de la part de l'utilisateur, alors on lui demande toujours un nombre
        demandenombre = prompt("Bonjour, saisissez un nombre");
    }
    //while(isNumber(demandenombre) == true){//
        if (demandenombre >= 0 ){
            alert("Votre nombre est positif.")
        }
        else {
            alert("Votre nombre est négatif.")
        }
}
nombre();
*/

// Correction
/*
function ispositif(nombre){
    let retour;
    if (nombre >=0){
        retour = true;
    }else{
        retour = false;
    }
    return retour;
}
let res = ispositif(-1);
res = ispositif(0);
res= ispositif(1);


function min2(){
    let saisie = prompt("Saisir un nombre");
    // Utiliser while
    while(isNumber(saisie) == false)
    saisie = prompt("Saisir un nombre");
}
let condition = ispositif(saisie)
//pas fini
*/

// Les tableaux
/*
let names = []; //Déclaration d'un tableau vide
console.log(names);
console.log(typeof(names)); //Objet
names = ["Alain", "Bernard", "Coralie"];
console.log(names);

// Accés aux éléments d'un tableau par l'index
let name1 = names[0]; //le 1er élément a pour index 0
let name2 = names[1];
let name3 = names[2];
let name4 = names[3];
console.log(name1, name2, name3, name4);
let longueur = names.length;
console.log(longueur);
console.log(names[longueur]); //index maximum = longueur -1

// Ajout d'un élément
names[3] = "Denise";
console.log(names);
console.log(names.length);

//Remplacement d'un élément avec l'index
names[2] = "Christine";
console.log(names);

//Parcours des élémens d'un tableau
for(let i = 0; i < names.length; i++){
    let name = names[i];
    console.log(names);
}
*/

// https://www.w3schools.com/jsref/jsref_obj_array.asp

// Créer 5 tableaux (nom, prenom, birth) (nom, prenom, 1992-08-24)
// Créer un tableau contenant ces 5 tableaux
// Créer une fonction permettant d'afficher dans la console : nom, prénom et âge de chaque personne sur une ligne différente

/*
let f =[] //Grand tableau
let a =["Delannoy", "Laurent", "1992-08-24"];
let b =["Dupont", "Philippe", "1986-12-05"];
let c =["Cambier", "Anthony", "1995-02-15"];
let d =["Martin", "Kevin", "1968-06-12"];
let e =["Trumeau", "Jimmy", "1995-07-28"];
/!*console.log(a);
console.log(b);
console.log(c);
console.log(d);
console.log(e);*!/

f.push(a,b,c,d,e); // Pusher les tableaux dans le tableau principal
console.log(f); // Afficher le tableau f

function calculage(date){

    var aujourdhuiBrut = new Date(); // On assigne une date à ajdbrut
    let aujourdhui = aujourdhuiBrut.getFullYear(); // On lui affecte l'année en cours

    for (let i = 0; i < f.length; i++){ // Pour i = 0 allant à la longueur du tableau de F
        let anneeAnivBrut = new Date(f[i][2]); //  On assigne a f2i une nouvelle date
        let anneeAniv = anneeAnivBrut.getFullYear(); //  on lui assigne l'année en cours
        console.log(f[i][0]+" "+f[i][1]+" "+ (aujourdhui-anneeAniv)+ " ans"); // 2019 - 1992
    }
}
calculage(f);
*/


// Différence entre let et var
// https://medium.com/@vincent.bocquet/var-let-const-en-js-quelles-diff%C3%A9rences-b0f14caa2049

// Création d'un objet en littérale
/*
let personne ={
    firstName : "Bill",
    lastName : "Gates",
    age : 0,

    fullName : function(){
        return this.Name + " " + this.lastName;
        // This represente l'object personne
    }
}
console.log(personne); //JSON : (key : value...)
console.log(typeof(personne));

// Accés aux propriétés
console.log(personne.age); //ou
console.log(personne['age']);
// Utilisation d'une fonction
personne.fullName();
// Création d'une nouvelle propriété
personne.gender = "M";
//Création d'une nouvelle fonction
personne.parle  = function(text){
    text = this.fullName() + " a dit " + text;
    console.log(text);
}

    // Utilisation d'une fonction constructeur
function Personne(firstName, lastName, age) {
    this.Firstname = firstName; // This représente l'objet personne
    This.lastName = lastName;
    this.age = age;

    this.fullName = function(){
        return this.firstName + " " + this.lastName;
    }
}
*/

// Créer une classe véhicule avec les propriétés longueur, poids, distance
/*
class Vehicule{
    constructor(longueur, poids, distance){
        this.longueur = longueur;
        this.poids = poids;
        this.distance = distance;
    }
}
let monVehicule1 = new Vehicule(3, 15, 20);
let monVehicule2 = new Vehicule(8, 10, 65);
console.log(monVehicule1);
console.log(monVehicule2);

// Créer une class car avec les propriétés
// Longueur, poids, distance, marque, couleur et la fonction rouler (vitesse, temps)

class Car extends Vehicule{  // La class car est une extension de la class vehicule
    constructor(marque, couleur,longueur, poids, distance){
        super(longueur, poids, distance); // Permet de reprendre les attributs de la class Vehicule (éviter de retaper)
        this.marque = marque;
        this.couleur = couleur;
    }
    Rouler(vitesse, temps){
        let resultat = vitesse/60*temps;
        this.distance += resultat;
        // On peut aussi faire : return this.distance += vitesse / 60 * temps; ce qui nous permet de ne faire qu'une seule ligne
        // this.distance += resultat signifie : this.distance = this.distance + resultat. += car la distance augmente
        // This.distance va aller chercher les 80 rentrer au dessus, on lui ajoute ensuite le résultat de 100/6*temps rentrer plus bas
    }
}
let maCar = new Car("Volvo", "Red", 40, 20, 80); // Création d'un objet Car
maCar.Rouler(100,15); // On lui inflige 100km/h pendant 15 minutes, la fonction va calculer la distance et l'ajouter au 80km qu'elle a déjà, grâce au let resultat
console.log(maCar);
console.log((maCar.distance));
*/

// Créer une classe Plane avec les propriétés longueur, poids, distance (en km), maxPassager
// La fonction voler (vitesse, temps)
// Vitesse en noeuds (1.852 km/h) et temps en minutes
/*
class Plane{
    constructor(longueur, poids, distance, maxPassager){
        this.longueur = longueur;
        this.poids = poids;
        this.distance = distance;
        this.maxPassager = maxPassager;
    }
    voler(vitesse, temps){
        /!*vitesse = vitesse*1.852;
        let resultat = vitesse/60*temps;
        this.distance += resultat;*!/
        return this.distance += vitesse * 1.852 / 60 * temps;
    }
}
let monPlane = new Plane(15, 100, 220, 350);
monPlane.voler(500,30);
console.log(monPlane);
console.log(monPlane.distance);
*/

// Le DOM
let elt1 = document.getElementById("divTwo");
let elt10 = $('#divTwo'); // Attention JQ il envoi toujours un tableau

let elt2 = document.getElementById("cls1"); //Tableau
let elt23Q = $('.cls1'); // JQ Attention Tableau

let elt3 = document.getElementsByName("div3"); //Tableau
let elt33Q = $('[name=div3]'); // JQ Attention Tableau

let elt4 = document.getElementsByTagName("p"); //Tableau
let elt43Q = $('p'); // JQ Attention Tableau

let elt5 = document.querySelector("#p22");
let elt53Q = $('#p22'); // JQ Attention Tableau

let elt6 = document.querySelector("div .cls1");
let elt7 = document.querySelectorAll("p.cls1"); //Tableau
console.log(elt1);
console.log(elt2);
console.log(elt3);
console.log(elt4);
console.log(elt5);
console.log(elt6);
console.log(elt7);
console.log(elt10);
console.log(elt23Q);
console.log(elt33Q);
console.log(elt43Q);
console.log(elt53Q);







