alert("mon premier script en javascript !");

/* var num = 1 ;
var prenom = "Jean" ;

alert(num);
alert(prenom); */

yourVar = 777;
myVar = "Bonjour";  // type string

console.log(typeof yourVar);      // typeof permet de vérifier le type en cours d'une variable  sur la page internet avec F12 onglet console
console.log(typeof myVar);
console.log("texte affiché dans la console");


var age = 35;
document.write(age);

document.write("votre âge");

document.write("Votre âge est : " + age + "ans"); 

document.write("<b>Votre âge est </b>" + age); 
document.write("<br>" + " Votre âge est " + age); 

/* window.alert(myVar);
window.alert("chaîne de caractères");  */
window.alert(myVar + "chaîne de caractères");


var reponse1 = window.prompt("Saisissez votre nom");
var reponse2 = window.prompt("Saisissez votre couleur préférée");

if (window.confirm("Voulez-vous continuer ?") == true) 
{ 
   
}

