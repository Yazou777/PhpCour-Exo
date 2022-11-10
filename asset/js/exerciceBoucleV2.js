
function tableau()
{
    var tableau = [];
    var nbBoucle = 1;
    do
    {
var saisieP = prompt("Invite de script :" + "\n\nSaisissez le prénom N°"+nbBoucle+ "\nou Clic sur Annuler pour arrêter le saisie.");
if (saisieP == null || saisieP == "")  
{
    return tableau;
    break;
}

var nbprenom = tableau.push(saisieP)
console.log(nbprenom);
console.log(tableau);
nbBoucle++;
    } while (saisieP != null && saisieP != "")  
}
var tableau =tableau();
console.log(tableau);


/*
var N = 10;

while (N >=0)
{
    console.log(N);
    N--;
}
*/


/*
function GetInteger ()
{
var  x = Number(prompt("Donnez un entier"));
return x;
}



function tableau()
{
    var tableau = [];
    do
    {
var saisieP = GetInteger();
if (saisieP == null || saisieP == "" || saisieP == 0)  
{
    return tableau;
    break;
}

var nbposte = tableau.push(saisieP)
console.log(nbposte);
console.log(tableau);
    } while (saisieP != null && saisieP != "")  
}
var tableau =tableau();
console.log(tableau);




const initialValue = 0;
const sumWithInitial = tableau.reduce((previousValue, currentValue) => previousValue + currentValue, initialValue);
console.log("la somme des valeurs = "+sumWithInitial);
console.log("la moyenne est "+sumWithInitial/tableau.length);

*/



/*
function tableau()
{
    var i = 1
    var tableau = [];
    var X =Number(prompt("donnez un entier"));
    var N = Number(prompt("nombre de multiple"));
    do
    {
var saisieP = X ,N;
if (saisieP == null || saisieP == "" || saisieP == 0)  

{
    return tableau;
    break;
}

var nbposte = tableau.push(saisieP)
console.log(nbposte);
console.log(tableau);
var resultat = i * X
console.log("Le résultat de "+i+"x "+X+" est : "+resultat);
i++;
    } while (i <= N)  
}
var tableau =tableau();
*/
/*
function getVowels(str) {
    var vowelsCount = 0;
  
    //turn the input into a string
    var string = str.toString();
  
    //loop through the string
    for (var i = 0; i <= string.length - 1; i++) {
  
    //if a vowel, add to vowel count
      if (string.charAt(i) == "a" || string.charAt(i) == "e" || string.charAt(i) == "i" || string.charAt(i) == "o" || string.charAt(i) == "u") {
        vowelsCount += 1;
      }
    }
    return vowelsCount;
  }
  var nbvoyelle = getVowels(prompt("raconte ta vie"))
console.log("nombre de voyelle = "+nbvoyelle);*/