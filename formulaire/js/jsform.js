/*
function surligne(verifemail, erreur)
{
    if(erreur)
        verifemail.style.backgroundColor = "#fba";
    else
        verifemail.style.backgroundColor = "";
}
surligne(verifemail,);

document.getElementById(verifemail);
*/

/*function email() {
    document.getElementById(verifemail);
    if (verifemail)
        document.getElementById(verifemail).innerHTML = "L'adresse mail est valide";
        document.getElementById(verifemail).style.color = green;
    else
    {
        document.getElementById(verifemail).innerHTML = "l'adresse mail n'est pas valide";
        document.getElementById(verifemail).style.color = red;
    }
    return false;
}
email();*/

/*
$("document").on("submit", function(event, target){   // Va chercher le document submitt, et quand on clique dessus déclenche l'évenement ci-dessous
    event.preventDefault(); //Veut dire ne raffraichît pas la page
    chekEmptyInputs(); //Appelle la fonction dessous
})
*/


$("button").on("click", function(event, target){   // Va chercher le document button, un clique dessus déclenche l'évenement ci-dessous
    event.preventDefault(); // Veut dire ne raffraichît pas la page
    checkEmptyInputs(); // Appelle la fonction dessous
})

function checkEmptyInputs(){
    $(".notempty").each(function (i, elt){ // notempty appelle la classe notempty dans le html, pour dire tel input est obligatoire, each veut dire pour tous
        if(elt.value == ""){ // Si l'élément est vide fait ça :
        $(elt).toggleClass("border-danger"); // Déclenche le border danger
        $(elt).next().toggleClass("d-none"); // En dessous ne cache plus le small
        }
    })
}

function checkEmail(){
    $(".verifemail").each(function) (i, elt){
        if(elt.value = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/){
        }
        else
            ($(elt).toggleClass("border-danger");
        $(elt).next().toggleClass("d-none");
    }
}

/*function checkMailFormat(){
    let pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    let saisie = $(".verifemail")[0].value;
    saisie = $(selector)[0].value;
}*/
