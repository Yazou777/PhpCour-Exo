
document.getElementById('projet').innerHTML = "Sélectionnez <br>l'environnement <br>technique du projet : "

function checkForm(f) {
    var x  = document.querySelector('#societe').value;
    var filtre = new RegExp("^[A-Za-z]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez seulement des caracteres dans la case Société");
        return false;
    }

    var x  = document.querySelector('#pac').value;
    var filtre = new RegExp("^[A-Za-z]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez seulement des caracteres dans la case Personne à contacter");
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
    
    var x  = document.querySelector('#ville').value;
    var filtre = new RegExp("^[A-Za-z]+$");
    var resultat = filtre.test(x);
    console.log(resultat);
    if (resultat==false) {
        alert("Entrez seulement des caracteres dans la case Ville");
        return false;
    }
}


/*document.querySelector('.menu').onclick = function menu() 
{
   var test= document.getElementById("pro").value;*/
 /*var projet=document.getElementById("pro").selectedIndex;
 var Pro= document.getElementById("pro").options[projet].value;*/
/*console.log(test);
 document.getElementById('tech').innerHTML = test;
}*/
/*
  const select = document.getElementById("pro");
  select.addEventListener("change", e => {
    var selectvalue = e.target.value;
    console.log(selectvalue);
    document.getElementById('tech').value= selectvalue;
  });
*/
 
  function plop() 
  {
    
 document.getElementById('tech').value = document.getElementById("pro").value;
  }
 
 document.querySelector('.menu').addEventListener("change", plop);
