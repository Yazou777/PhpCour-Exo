/*var nbBoucle= 1

do 
{   
    var saisie = window.prompt("Invite de script :" + "\n\nSaisissez le prénom N°" +nbBoucle+ "\nou Clic sur Annuler pour arrêter le saisie.");
    
  


     console.log(saisie );
    
     console.log(nbBoucle);

    nbBoucle++;
} while (nbBoucle <= 6 && saisie != null && saisie != "");


console.log("fin de la boucle");
console.log(saisie);
console.log(nbBoucle);
var nbSaisie = nbBoucle - 2;
window.alert("nombre de saisie = "+ nbSaisie);
console.log()
*/
/*
var nbBoucle= 1;


while (nbBoucle < 5)
{
    var saisie = window.prompt("Invite de script :" + "\n\nSaisissez le prénom N°" +nbBoucle+ "\nou Clic sur Annuler pour arrêter le saisie.")

if (saisie == null)
{
    nbBoucle = 0;
    break;
}

if (saisie == "")
{
    break;
}

if (nbBoucle == 1)
   {
    var prenom1 = saisie;
    console.log(prenom1);
   }

if (nbBoucle == 2)
   {
    var prenom2 = saisie;
    console.log(prenom2);
   }

if (nbBoucle == 3)
   {
    var prenom3 = saisie;
    console.log(prenom3);
   }

if (nbBoucle == 4)
   {
    var prenom4 = saisie;
    console.log(prenom4);
   }
nbBoucle++;
}
console.log(saisie);
console.log(nbBoucle);


var nbBoucle = nbBoucle -1
console.log(nbBoucle );

switch (nbBoucle)
{   
  
    case 1 :
     console.log(prenom1); 
     window.alert("Vous avez saisie "+ nbBoucle +" prénom \n\nle prénom était : "+ prenom1); 
     break; 
  
  case 2 :
     console.log(prenom1 + " " + prenom2); 
     window.alert("Vous avez saisie "+ nbBoucle +" prénoms \n\nles prénoms étaient : "+ prenom1+ " ," + prenom2);
     break;  

  case 3 :
     console.log(prenom1+" "+prenom2+" "+prenom3);
     window.alert("Vous avez saisie "+ nbBoucle +" prénoms \n\nles prénoms étaient : "+ prenom1+" ,"+prenom2+" ,"+prenom3); 
     break;

  case 4 :
     console.log(prenom1+" "+prenom2+" "+prenom3+" "+prenom4);
     window.alert("Vous avez saisie "+ nbBoucle +" prénoms \n\nles prénoms étaient : "+ prenom1+" ,"+prenom2+" ,"+prenom3+" ,"+prenom4);
     break;

  default: 
     console.log("erreur");
     window.alert("Vous avez annulé.")
} 
*/

/*
var N = 10;

while (N >=0)
{
    console.log(N);
    N--;
}
*/
/*
var nb1 = window.prompt("donnne un chiffre entier");
var ope = window.prompt("donne un oprérateur (+, -, *, /");
var nb2 = window.prompt("donne un 2eme chiffre entier");


nb1 = Number (nb1);
console.log(nb1);
nb2 = Number (nb2);
console.log(nb2);

console.log(nb1 + ope + nb2)

if (ope == "/" && nb2 == 0 )
{
   window.alert("Qu'est ce tu essaye de faire la !?!");
     console.log("Qu'est ce tu essaye de faire la !?!"); 
}

switch (ope)
{   
  case "+" :
   var resultat = nb1 + nb2;
     console.log(resultat);  
     window.alert(resultat);
     break; 
  
  case "-" :
   var resultat = nb1 - nb2;
     console.log(resultat); 
     window.alert(resultat);
     break;  

  case "*" :
   var resultat = nb1 * nb2;
     console.log(resultat);
     window.alert(resultat);
     break;

   case "/" :
      var resultat = nb1 / nb2;
     console.log(resultat);
     window.alert(resultat);
     break;

  default: 
     window.alert("erreur");
     console.log("ALERTE");
} 
*/


var nbBoucle = 1;
// var prenom = window.prompt("Invite de script :" + "\n\nSaisissez le prénom N°" +nbBoucle+ "\nou Clic sur Annuler pour arrêter le saisie.");
var boucle=true;
var prenom=true;
while (boucle)
{
    if(prenom != "")
    {
    var prenom = window.prompt("Invite de script :" + "\n\nSaisissez le prénom N°" +nbBoucle+ "\nou Clic sur Annuler pour arrêter le saisie.");
    console.log(prenom);
    nbBoucle++;
    }else{
        nbBoucle--;
        break;
        //boucle=false;
    }
   
}
nbBoucle--;
console.log("il y a "+nbBoucle+"prenom(s)");
console.log(prenom);
window.alert("il y a "+nbBoucle+"prenom(s)"+"\n\nLe(s) prénom(s) : "+prenom);

