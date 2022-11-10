/*window.alert("coucou");


function exemple(texte)
{
   alert(texte);
}
exemple(145);
console.log(exemple);
console.log(texte);*/

/*
function exemple2(ch, tex , nb)
{
    var resultat = ch + nb;
    console.log(resultat);
    alert(tex +" "+resultat);
    return resultat;
}
exemple2(1, "égal", 20);
var resultat = exemple2(1, "égal", 20);
console.log(resultat);
*/

/*
function maFonction(obligatoire, facultatif) 
{
   // Affiche 'Argument 1 : Paul'
   console.log('Argument 1 : '+obligatoire); 

   // 1er appel : erreur car 2ème argument non envoyé 
   // 2ème  appel : affiche 'Argument 2 (facultatif) : Anne'
   console.log('Argument 2 (facultatif) : '+facultatif); 
}

maFonction('Paul'); // 1er appel

maFonction('Paul', 'Anne'); // 2ème appel
*/

/*
function maFonction(obligatoire, facultatif) 
{
   if (typeof facultatif == 'undefined') 
   {
      facultatif = 'Anne';  
   }      

   // Affiche 'Argument 1 : Paul'
   console.log('Argument 1 : '+obligatoire); 

    // 1er appel : erreur car 2ème argument non envoyé 
   // 2ème  appel : affiche 'Argument 2 (facultatif) : Anne'
   console.log('Argument 2 (facultatif) : '+facultatif); 
}

maFonction('Paul'); // 1er appel

maFonction('Paul', 'Anne'); // 2ème appel
*/


// Fonction qui retourne le carré d’un nombre
/*function carre(nombre) 
{
  var resultat = nombre*nombre;
  return resultat; 
}
var resultat2 = carre(5);
console.log(resultat2);
console.log(resultat);
*/


/*var x = 0;

while (x < 5) 
{
    console.log("x : "+x);
    x++;
}
*/
/*
function boucle(x) 
{
    if (x >= 10) 
    { 
        return; 
    }

    console.log("x : "+x);

    boucle(x + 1); // appel récursif
}

boucle(0); // appel initial de la fonction
*/
var x = prompt("entrez un nombre");
var y = prompt("Entrez un multiplicateur");
function produit(x ,y)
{ 
var resultat = x * y;
return resultat;
}
var egal = produit(x ,y);
console.log(produit(x ,y));