function verifNomPrenom(){
    var nom=document.getElementById("nom1").value.trim();
    var regex = new RegExp('^[0-57A-Za-z.-]+$');
    var result= regex.test(nom);

    return result;
}