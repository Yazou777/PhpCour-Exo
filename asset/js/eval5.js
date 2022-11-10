function checkForm(f) {
    var x  = document.querySelector('#nom').value;
    var filtre = new RegExp("^[A-Za-z]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez seulement des caracteres dans la case nom");
        return false;
    }
    
    var x  = document.querySelector('#prenom').value;
    var filtre = new RegExp("^[A-Za-z]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez seulement des caracteres dans la case prénom");
        return false;
    }
    
    var x  = document.querySelector('#cp').value;
    var filtre = new RegExp("^[0-9]{5}$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez le code postal sur 5 chiffres s.v.p.!");
        return false;
    }
    
    var x  = document.querySelector('#adresse').value;
    var filtre = new RegExp("^[0-9A-Za-z\ \'\-]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("adresse invalide");
        return false;
    }
   
    
    var x  = document.querySelector('#ville').value;
    var filtre = new RegExp("^[A-Za-z]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez seulement des caracteres dans la case Ville");
        return false;
    }

    var x  = document.querySelector('#email').value;
    var filtre = new RegExp("^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Email invalide");
        return false;
    }

    var x  = document.querySelector('#votrequestion').value;
    var filtre = new RegExp("^[0-9A-Za-z\ \'\-]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Email invalide");
        return false;
    }
}
