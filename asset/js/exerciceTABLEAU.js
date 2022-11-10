/*
var myTableau = ["pomme", 123, "poire", 456];
console.log(myTableau);
console.log(myTableau[0]);
var myTableau = Array(8); // Tableau vide qui contiendra 5 éléments
alert(myTableau);
*/

/*
var myTableau = ["pomme", "poire", "banane", "fraise", "abricot"]; 
var nb = myTableau.length ;
console.log("Le tableau contient "+nb+ "éléments"); // Affiche : 5

var myTableau = ["pomme", "poire", "banane", "fraise", "abricot"];

for (var i = 0; i < myTableau.length; i++) 
{
   console.log("Fruit : "+myTableau[i]);
}

for (var fruit in myTableau) 
{
   console.log("Fruit : "+myTableau[fruit]);
}
*/
/*
var tab1 = []; 
tab1[0] = ["poireau", "tomate", "carotte"];
tab1[1] = ["pomme", "poire", "banane"];  
console.log(tab1[1][2]); 



var legumes = ["poireau", "tomate", "carotte"];
var fruits = ["pomme", "poire", "banane"];  

tab1[0] = legumes;
tab1[1] = fruits;
*/

function InitTab (nbposte)
{
var tableau = Array(Number(nbposte));
 nb = tableau.length ;
console.log("Le tableau contient "+nb+ " éléments"); // Affiche : 5
return tableau ;
}
var tableau = InitTab (prompt("Combien de poste souhaitez vous ?"));
console.log(tableau);
console.log(nb);

function SaisieTab()
{
   
    for (var i = 0; i < nb; i++) 
    {
        var saisie = prompt("entrez une valeur")
        tableau[i] = Number(saisie);
        
       console.log("contenu tableau ["+i+"] : "+tableau);
    }
    return tableau;
}
var saisie = SaisieTab();
alert(saisie);

/*
function GetInteger (lire)
{
var  x = Number(lire);
return x;
}
var x =GetInteger (prompt("Donnez un entier"))
console.log(x);*/

function AfficheTab ()
{
    for (var i = 0; i < nb; i++) 
    {
       console.log("contenu tableau ["+i+"] : "+tableau[i]);
    }
    return tableau;
}
AfficheTab();


function RechercheTab (recherche)
{
    console.log("contenu du poste ["+recherche+"] :"+tableau[recherche]);
}
RechercheTab(prompt("Quelle numéro de poste voulez vous voir? Poste Numero :"));

function InfoTab()
{
    function compareNombres(a, b) {
        return a - b;
      }
console.log("le tableau trié en order croisant : "+tableau.sort(compareNombres));
console.log("la plus grande valeur est : "+tableau[nb-1]);
const initialValue = 0;
const sumWithInitial = tableau.reduce((previousValue, currentValue) => previousValue + currentValue, initialValue);
console.log("la somme des valeurs = "+sumWithInitial);
console.log("la moyenne est "+sumWithInitial/nb);
}
InfoTab();





function sort(tableau){
    var changed;
    do{
        changed = false;
        for(var i=0; i < tableau.length-1; i++) {
            if(tableau[i] > tableau[i+1]) {
                var tmp = tableau[i];
                tableau[i] = tableau[i+1];
                tableau[i+1] = tmp;
                changed = true;
            }
        }
    } while(changed);
}

sort(tableau);
console.log(tableau);






