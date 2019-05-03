function verifNom(){
    var nom=document.getElementById("nom").value.trim();
    var prenom = document.getElementById("prenom").value.trim();

    var regex = new RegExp('^[A-Za-z.-]{0,20} +$');
    var result= regex.test(nom);


    return result;
}


function verifA(){
    var adresse=document.getElementById("adresse").value.trim();
    var regex = new RegExp('^[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+[- ]{0,1}[a-zA-Z]+$');
    var result= regex.test(adresse);
    if (result == true) {
        document.getElementById("bar5").style.background ="rgba(0, 255, 0, 0.5)";
    }else{
        document.getElementById("bar5").style.background="rgba(255, 0, 0, 0.5)";
    }
    return result;
}