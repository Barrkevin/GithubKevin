/*types JS*/
let age, isMajor = false, nom ="undefined", prenom = "Kevin";
let type = typeof (age); /*undefinited*/
console.log(type);

type = typeof (prenom); /*string*/
console.log(type);

type = typeof (isMajor); /*boolean*/
console.log(type);

prenom = 20; /*Typage dynamique*/
type = typeof(prenom);
console.log(type); /*Number*/

age = 20;
type = typeof(age);
console.log(type); /*string*/

let integer = parseInt(age); /*Convertion d'une chaine en entier*/
console.log(typeof(integer)); /*Number*/

let real = parseFloat(age); /*Convertion d'une chaine en réel*/
console.log(typeof(real)); /*Number*/

integer = parseint("Hello");
console.log(integer);// Nan
console.log(typeof(integer)); //Nan est de type number
let isNotNumber = isNaN((integer)); //La fonction isNan permet de vérifier si une variable est NaN (not a number)
console.log(isNotNumber);//true

isNotNumber = isNaN((10.2));
console.log(isNotNumber); //false, car 10.2 est un nombre

isNotNumber = isNaN(true);
console.log(isNotNumber);//false, pourtant true n''est pas un nombre

let bp;