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
// Ecrivez une fonction qui permette de générer un lien.
function lien($lien, $titre){
   echo '<a href='.$lien.'>'.$titre.'</a><br>';
}
lien("https://www.reddit.com/", "Reddit Hug");

// Ecrivez une fonction qui calcul la somme des valeurs d'un tableau
$tab = array(4, 3, 8, 2);
$resultat = array_sum($tab);
function TabSum($tab){
  global $tab ,$resultat;
  echo $resultat.'<br>';
}
TabSum($tab);

// Créer une fonction qui vérifie le niveau de complexité d'un mot de passe

function mdpComplexe($mdp){
  $resultat = preg_match ('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}/', $mdp);
  if ($resultat == true) {
    echo 'mdp sécurisé<br>';
  }
  else {
    echo 'mdp faible<br>';
  }
}
mdpComplexe('TopSecret42')


// $resultat = preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}/', $password);
//             (?=.*\d)    -> Au moins 1 chiffre
//             (?=.*[a-z]) -> Au moins 1 minuscule
//             (?=.*[A-Z]) -> Au moins 1 Majuscule
//             .{8}        -> Au moins 8 caractères
                // ?=  pour tester   .* pour la presence de au moins une fois ce qui suit
  ?> 
</body>
</html>