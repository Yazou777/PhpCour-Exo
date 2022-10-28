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
$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");

// Affiche : 3 mars 2018
echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; 

$facture = array(
    "Janvier"   =>  500,
    "Février"   =>  620,
    "Décembre"  =>  300
); 
echo $facture["Février"];

// Manipulation des tableaux associatifs
$facture = array(
    "Janvier" => 500, 
    "Février" => 620, 
    "Mars" => 300, 
    "Avril" => 130, 
    "Mai" => 560, 
    "Juin" => 350
    ); 
 
 $facture_sixmois = 0; 
 
 foreach ($facture as $mois => $montant) 
 { 
    echo "Facture du mois de $mois : $montant Euros<br>"; 
    $facture_sixmois += $montant; 
 } 
 
 echo "Facture total de six mois : <b>$facture_sixmois Euros</b></br>"; 

//  Tri dans les tableaux
// Les fonctions sort() et rsort()
// Ces fonctions permettent le tri des valeurs d'un tableau simple, 

$nom = array("franck","laurent","caroline","magali","veronique");

// on effectue un TRI CROISSANT DES VALEURS
sort($nom);

for ($i = 0 ; $i < count($nom) ;  $i++) 
{
   echo "$nom[$i]<br>";
}

// Résultat :  
//    caroline  
//    franck  
//    laurent  
//    magali  
//    veronique

// Les fonctions asort() et arsort()
// Ces fonctions permettent le tri des valeurs d'un tableau associatif,
$tableau = array(
    "a" => "Lundi",
    "b" => "Jeudi",
    "c" => "Vendredi",
    "d" => "Mardi",
    "e" => "Mercredi"
 ); 
 
 // on effectue un TRI DECROISSANT DES VALEURS
 arsort($tableau);
 
 foreach($tableau as $cle => $valeur) 
 { 
    echo $cle ." : ".$valeur."<br>"; 
 }
 
 // Résultat :  
 //    c : Vendredi
 //    e : Mercredi
 //    d : Mardi
 //    a : Lundi
 //    b : Jeudi

//  Les fonctions ksort() et krsort()
// Ces fonctions permettent le tri des clés d'un tableau associatif, 
$tableau = array(
    "a" => "Lundi",
    "b" => "Jeudi",
    "c" => "Vendredi",
    "d" => "Mardi",
    "e" => "Mercredi"
 ); 
 
 // on effectue un TRI CROISSANT DES CLES
 krsort($tableau);
 
 foreach($tableau as $cle => $valeur) 
 { 
    echo $cle ." : ".$valeur."<br>"; 
 }
 
 // Résultat :  
 //    a : Lundi
 //    b : Jeudi
 //    c : Vendredi
 //    d : Mardi
 //    e : Mercredi

//  La fonction count() NB: La fonction sizeof() fait strictement la même chose; il s'agit d'un alias de count()
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi");

$nb = count($tableau);

echo"Le tableau contient ".$nb." éléments.</br>"; 

// Résultat :
//    Le tableau contient 5 éléments.

// Ajout d'un élément dans le tableau, 
// au début : array_unshift()
// à la fin : array_push()

$tableau = array("Mercredi","Jeudi"); 

array_unshift($tableau, "Lundi", "Mardi"); 
array_push($tableau, "Vendredi"); 

foreach($tableau as $valeur) 
{ 
   echo $valeur . "<br>"; 
}
// Résultat :
//    Lundi
//    Mardi
//    Mercredi
//    Jeudi
//    Vendredi

// Suppression d'un élément dans le tableau, 
// au début : array_shift()
// à la fin : array_pop()

$tableau = array("Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"); 

array_shift($tableau); 
array_pop($tableau); 

foreach($tableau as $valeur) 
{ 
   echo $valeur . "<br>"; 
}
// Résultat :
//    Mardi
//    Mercredi
//    Jeudi
    ?>
</body>
</html>