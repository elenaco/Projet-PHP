function verifNom(){
    var nom=document.getElementById('nom').value.trim();

    var regex = new RegExp('^[A-Za-z.-]{0,20} +$');
    var result= regex.test(nom);
    if (result == true) {
        alert("cooool");
    }else{
        alert("aiaiaiaiaia");
    }

    return result;
}

function verifPrenom(){
    var prenom = document.getElementById('prenom').value.trim();

    var regex = new RegExp('^[A-Za-z.-]{0,20} +$');
    var result= regex.test(prenom);


    return result;
}


function verifMail(){
    var adresse=document.getElementById('mail').value.trim();
    var regex = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$');
    var result= regex.test(adresse);

    return result;
}

/*function verifAge(){
    var age = document.getElementById().value.trim();
    var regex = new RegExp('^[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+$');
    var result= regex.test(adresse);

    return result;
}*/


function verifInfoUtilisateur() {

    if(verifNom()!=true || verifPrenom()!=true || verifMail()!=true){
        verifNom();
        verifPrenom();
        verifMail();
        verifAge();
    }

}