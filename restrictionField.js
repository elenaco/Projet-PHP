function verifNom(){
    var nom = document.getElementById('nom').value.trim();

    var regex = new RegExp('^[A-Za-z.-]{0,20}$');
    var result= regex.test(nom);
    if (result == false) {
        document.getElementById('errorN').innerHTML="Votre nom contient des caractères incorrects.";
    }

    return result;
}

function verifPrenom(){
    var prenom = document.getElementById('prenom').value.trim();

    var regex = new RegExp('^[A-Za-z.-]{0,20}$');
    var result= regex.test(prenom);

    if (result == false) {
        document.getElementById('errorP').innerHTML="Votre prénom contient des caractères incorrects.";
    }

    return result;
}


function verifMail(){
    var adresse=document.getElementById('mail').value.trim();
    var regex = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$');
    var result= regex.test(adresse);

    if (result == false) {
        document.getElementById('errorM').innerHTML="Votre mail n'est pas valide.";
    }
    return result;
}

function verifAge(){
    var age = document.getElementById('age').value.trim();
    var date = new Date();
    //alert(date.getMilliseconds());
    alert(age);
    /*var regex = new RegExp('^[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+$');
    var result= regex.test(adresse);

    return result;*/
}


function verifInfoUtilisateur() {

    if(verifNom()!=true || verifPrenom()!=true || verifMail()!=true){
        verifNom();
        verifPrenom();
        verifMail();
        //verifAge();
    }

}