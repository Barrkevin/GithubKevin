/*---Déclarer une variable---*/
let lastName;
let firstName = "Bill"; /*déclaration d'une variable*/
lastName = "Gates"; /*affection valeur à la variable*/
console.log(firstName + " " +lastName);




/*déclaration d'une constante*/
const fullName = firstName + " " + lastName;

/*autre écriture*/
console.log(fullName);

/* Bloc try catch pour gérer les erreurs*/
try{fullName = "Steve Jobs";}
catch (error) { /* Sert a capturer l'erreur */
    console.log(error); /* La valeur d'une constante ne peut être modifié*/
}
finally{

}


let bp;
