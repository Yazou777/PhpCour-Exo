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
// Ouverture d'un fichier

// Ouverture en lecture seulement depuis le début du fichier ("r") : $fp = fopen(string fichier, "r");
// Ouverture en écriture seulement depuis le début du fichier ("w") : $fp = fopen(string fichier, "w");
// Ouverture en écriture seulement depuis la fin du fichier ("a") : $fp = fopen(string fichier, "a");

// Exemples :

// $fp = fopen("/home/rasmus/file.txt", "r"); 
// $fp = fopen("../exemple.txt","a"); 
// $fp = fopen("http://www.php.net/", "r"); 
// $fp = fopen("ftp://user:password@example.com/", "w"); 
// Ecriture dans un fichier

// La fonction fputs() permet de lire un fichier; elle reçoit 2 arguments obligatoires et troisième faculatif fputs($fp, $str, length); :

//     $fp : pointe sur le numéro de fichier ouvert par fopen()
//     $str : représente la variable à enregistrer
//     length : 3ème argument, faculatif, qui représente la longueur de la variable


 // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
 $myVar = "Bonjour le monde<br>";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp); 

// Ouvrez le fichier essai.txt et vérifiez que la phrase Bonjour le monde s'y trouve. 
  
// Lecture dans un fichier

// La fonction fgets() permet de lire un fichier; elle reçoit 2 arguments : fgets($fp, length); :

//     $fp : pointe sur la ressource de fichier ouvert avec fopen()
//     length : représente la longueur d'enregistrement à lire (en octets)

  // Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 
// En fait l'instruction fgets() lit la ligne jusqu'à ce qu'elle rencontre un caractère de retour à la ligne \n. Par sécurité il est préférable de lui indiquer de lire 4096 caractères pour qu'elle puisse lire une ligne entière. Pour lire l'ensemble d'un fichier, vous pouvez aussi utilisez la fonction file().


// La fonction basename()

// Cette fonction retourne le nom d'un fichier dans un URL ou un chemin d'accès à un fichier 
$path = "/home/httpd/html/index.php"; 
$file = basename($path);
echo $file;
// $file retourne "index.php"  
 
// La fonction copy()

// Copie un fichier vers un autre :

$fichier ="toto.txt"; 
/* création d'un fichier toto.txt.bak */
copy($fichier, $fichier.'.bak');
 
 
// La fonction dirname()

// Retourne le répertoire (directory) dans lequel se trouve le fichier :

$path = "/etc/passwd"; 
$file = dirname($path); /* $file retourne "/etc" */ 
echo $file;


// La fonction file()

// Pour lire l'ensemble d'un fichier et le retourne dans un tableau, chaque ligne du tableau correspond à un ligne du fichier.
// La fonction file_exists()

// Retourne true (vrai) si le fichier existe.
// La fonction is_dir()

// Retourne true si le fichier existe avec un directory.
// La fonction is_file()

// Retourne true si le fichier existe et est un regular file. 

// Un compteur texte en PHP

// Vous voulez avoir un compteur différent pour toutes les pages de votre site ?

// Voici un petit script en PHP qui fera l'affaire :

    // On ouvre le fichier moncompteur.txt
    $fichier = fopen("moncompteur.txt","r+");

    // on lit la première ligne du fichier, le résultat est stocké dans la variable $visiteurs
    $visiteurs = fgets($fichier);

    // on ajoute 1 au nombre de visiteurs
    $visiteurs++;

    // on se positionne au début du fichier
    fseek($fichier,0);

    // on écrit le nouveau nombre dans le fichier
    fputs($fichier,$visiteurs);

    // on referme le fichier moncompteur.txt
    fclose($fichier);

    // on indique sur la page le nombre de visiteurs
    echo "$visiteurs personnes sont passées par ici";

//     Quelques précisions et explications :

//     Vous devez placer sur votre site un fichier moncompteur.txt avec juste le chiffre 0 dedans. Bien entendu si vous désirez que votre compteur démarre à 1254, vous pouvez le faire.
//     La fonction fopen() permet d'ouvrir un fichier présent sur votre site. L'attribut r+ permet de l'ouvrir en lecture et écriture.
//     La fonction fgets() permet de lire la première ligne du fichier.
//     fseek() permet de se repositionner au début du fichier. Ainsi, lorsque l'on réécrit le nouveau nombre de visiteurs, on est sûr d'effacer l'ancien.
//     fputs() permet de réécrire la variable incrémentée dans le fichier.
//     fclose() permet de refermer le fichier moncompteur.txt que l'on a ouvert au début du script.

// Voici une autre version plus concise.

$visiteurs = file_get_contents("moncompteur.txt");

$visiteurs++;

file_put_contents("moncompteur.txt", $visiteurs);

print("$visiteurs personnes sont passées par ici");
 ?>
</body>
</html>