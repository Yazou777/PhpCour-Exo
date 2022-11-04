<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// ucfirst(). Cette fonction permettra de passer le premier caractère de la chaîne en majuscule :
$texte = ucfirst("bonjour le monde<br>");
echo $texte;

// L'instruction static sert dans le corps de la fonction à conserver la valeur d'une variable 
function Test() { 
    static $a=0; 
    echo $a."<br>"; 
    $a++; 
 } 
 
 // Appel de la fonction (2 fois)
 Test(); 
 Test(); 
 Test(); 
 Test(); 
 

//  Pour utilisé une variable qui est en dehors de la function il faut utilisé l'instruction global
$a = $b = 2; 
function somme() { 
  global $a, $b; 
  $b = $a + $b; 
  echo $b."<br>";  
} 

somme(); 

echo $b."<br>";  

// Les librairies de fonctions

// Une librairie de fonctions est un ensemble de fonctions regroupées dans un seul fichier. En fait, les fonctions que nous créons ne sont disponibles que dans le ficher dans lequel elles se trouvent. Ainsi, pour les utiliser dans un autre programme, il faudrait les recopier. Mais, il existe bien sur un moyen de rendre les fonctions disponibles dans tous nos programmes. Il suffit pour cela, de regrouper vos fonctions dans un fichier externe et de référencer ce fichier dans votre script principal et ainsi rendre disponible toutes les fonctions pour ce programme. En pratique, il faut créer un fichier contenant toutes les fonctions.

// Concrètement :

// <?php   
//     function 1...
//     ...
//     function 2...
//     ...
// 
 /*?> */

/*<!--*/ // Enregistrer le fichier sous un nom quelconque que vous choisirez. Par exemple : mesfonctions.php

// Vous pourrez ajouter dans ce fichier autant de fonctions que vous aurez besoin pour vos applications.

// Ensuite, nous ajouterons l'instruction require ou (inlude) dans chaque programme où nous aurons besoin des fonctions : -->

// <?php
//     require('mesfonctions.php');

//     //...suite de l'application...
// 
/*?> */





?>    
</body>
</html>