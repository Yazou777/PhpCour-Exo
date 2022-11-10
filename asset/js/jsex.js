/* var nom = window.prompt("Entrez votre nom");
var prenom = window.prompt("Entrez votre prénom");
if (window.confirm("Etes-vous un homme ?") == true) 
{ 
   var sex = "Monsieur";
}

window.alert("Bonjour"  +"\xa0" + sex + "\xa0" + nom + " " +  prenom + "\xa0" +  "\n\nBienvenue sur notre site weeb !");
document.write("Bonjour \n" + sex + "\n" + nom + "\n" + prenom + "<br> Bienvenue sur notre site weeb !");
*/
 /*
 document.write("Coucou");

var a = "100" ;
var b = 100 ;
var c = 1 .toFixed(2);
var d = true ;

window.alert("Ceci est une chaîne de caractères :" + "\xa0" + a);

b-- ;
c = c + a ;

console.log(a);
console.log(b);
console.log(c); 
console.log(typeof c);
console.log(d);
*/



/*
var reponse = "oui"; 
var age = 33 ;
var permis = "Voiture" ;

if (reponse == "oui")
{    
    console.log("Bonne réponse !");    // Affichera 'Bonne réponse' dans la console
} 

if (age > 18 && permis == "Voiture")  
{
    console.log("Vous avez plus de 18 ans ET vous avez un permis de conduire voiture, vous pouvez conduire");
}


if (age > 18 || permis == "Voiture")  
{
    console.log("Vous avez plus de 18 ans OU vous avez un permis de conduire voiture, vous pouvez conduire");
}
*/

/*
var reponse = "C";

if (reponse == "A")
{
   console.log("Bonne réponse !");
} 
else if (reponse == "B")
{
   console.log("Mauvaise réponse !");
} 
else 
{ 
   console.log("Réponse inconnue.");
} 
*/

/*
var modele = "Clio";

switch (modele)
{   
  case "508" :
     console.log("Modèle 508 : marque Peugeot");  
     break; 

  case "Clio" :   
  case "Laguna" :
     console.log("Modèle "+modele+" : marque Renault"); 
     break;  

  case "C5" :
     console.log("Modèle C5 : marque Citroën");
     break;

  default: 
     console.log("Modèle "+modele+": marque inconnue");
} 
*/

/*var reponse = "oui";
var score = 19

if (reponse == "oui")
{   
   console.log("Bonne réponse!");

   score++; // Augmente le score de 1

   if (score == 20)
   {
       console.log("Vous avez gagné !");
   } // fin du 2ème if  

} // fin du 1er if
*/

/*
var age = 19;                                

(age >= 18) ? console.log("Vous êtes majeur") : console.log("Vous êtes mineur"); */     /* condition ternaire déconseillé manque de visibilité */

/* var nbr = window.prompt("donne un chiffre FREEERE")
console.log(nbr)

if (nbr%2 == 0)
{
    window.alert("nombre pair ma couille");
}
else 
{
    window.alert("nombre impair ma couille")
}
*/

/*
var date = window.prompt("donne ton année de naisance ");
var age = 2022 - date 
console.log(age)

if (age >= 18)
{
   window.alert("A " + age +" ans t'es un grand");
}
else{
   window.alert("A " + age + " ans tu es petit");
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

/*
console.log("Table de multiplication par 5");
console.log("=============================");

for (i=0; i<=10; i++)
{
    resultat = 5 * i;

    console.log("5 * "+i+" = "+resultat);
}

// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");
console.log(resultat);
*/

/*
var i = 0;

console.log("Table de multiplication par 5");
console.log("=============================");

while (i <= 10) 
{   
    // Exécute le calcul et stocke le résultat   
    // dans une variable nommée ‘resultat’  
    resultat = 5 * i;

    // A chaque tour, on affiche le résultat courant à l’utilisateur
    console.log("Le résultat de 5 x "+i+" est : "+resultat);

    // A chaque tour, on ajoute +1 à la variable i  
    i++; 
}

// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");
*/
/*
cpt = 1;

while (cpt<5) 
{
    if (cpt==4) 
    {
        break;
    } 

    console.log("ligne : "+cpt);
    cpt++;
}
console.log("ligne : "+cpt);
console.log("fin de la boucle");
*/
/*
var cpt = 1;

while (cpt < 5) 
{
    if (cpt == 3)
    {
        cpt++
        continue;
    }

    console.log("ligne : "+cpt);
    cpt++;
}

console.log("fin de la boucle");
*/
/*
var i=0

console.log("Table de multiplication par 5");
console.log("=============================");

do 
{   
    resultat = 5 * i;

    console.log("5 * "+i+" = "+resultat);

    i++;
} while (i <= 10) ;

// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");

console.log(i);
*/

/* for ... in : Cette structure conditionnelle est spécifique au Javascript, contrairement à for, while ou do… while que l'on peut rencontrer dans d'autres langages.
L'expression for..in permet de simplifier l'usage de la boucle for, notamment pour récupérer les éléments d’un tableau */

/*
var tableau = ["Paul", "Pierre", "Anne", "Sophie"];

for (var i in tableau) 
{
    console.log(tableau[i]);
}
*/