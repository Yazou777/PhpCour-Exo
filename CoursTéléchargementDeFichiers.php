<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Formulaire HTML -->
<!-- Pour que le téléchargement soit possible, il faut ajouter l'attribut enctype à la balise <form>. La valeur doit être multipart/form-data : -->
    <form action="post.php" method="post" enctype="multipart/form-data">

    <input type="file" name="fichier"> 
</form>
<!-- Ensuite, on a besoin d'un champ de type file, qui fera apparaître un bouton contenant le texte Parcourir avec lequel on pourra choisir un fichier présent sur le PC :    -->

<!-- Traitement en PHP -->
<!-- Dans le fichier de traitement PHP (celui assigné comme valeur à l'attribut action, lorsque le formulaire est soumis, on récupère les informations sur le fichier via la variable superglobale $_FILES. Comme les 7 autres superglobales, cette variable se comporte comme un tableau PHP.

Exercice : créer un formulaire d'upload et le fichier PHP de traitement correspondant, dans le fichier PHP écrivez juste var_dump($_FILES); et observez le résultat.  -->

<form action="post.php" method="post" enctype="multipart/form-data">

    <input type="file" name="fichier"> 
    <button class="bouton" type="submit">Envoyer</button>
</form>

    <!-- Vous devriez avoir quelque chose du genre :

    'name' => string 'monfichier.jpg' (length=10) = nom du fichier d'origine
    'type' => string 'img/jpeg' (length=10) = type MIME du fichier
    'tmp_name' => string 'C:\tmp\phpC1CD.tmp' (length=23) = nom et chemin du fichier temporaire
    'error' => int 0 = erreurs (s'il y en a, elles sont retournées via un tableau PHP)
    'size' => int 100813 = taille du fichier, en octets
 -->


 <!-- Gestion des erreurs

Si le téléchargmeent échoue, les erreurs sont retournées dans $_FILES["fichier"]["error"], les cas d'erreur sont prédéfinis dans un tableau.

    S'il n'y a pas d'erreur, $_FILES["fichier"]["error"] vaut 0,
    S'il y en a, la taille du tableau est supérieure à 0

Pour savoir si le tableau contient des erreurs, il faut donc faire :

if (sizeof($_FILES["fichier"]["error"]) > 0) { ... }  -->



<!-- Vérifier le type

On doit tout d'abord s'assurer de points basiques :

    un fichier a-t-il bien été téléchargé ?
    le type du fichier envoyé par l'utilisateur est-il celui attendu (image, document Word, PDF...) ?

Les fausses bonnes idées, car les informations retournées ne sont pas fiables :

    tester uniquement l'extension comme chaîne de caractère
    tester le type MIME retourné par le navigateur (celui dans $_FILES["fichier"]["type"]).

PHP fournit un extension nommée _FILEINFO qui fait référence en termes de sécurité. Voici comment l'utiliser, pour un type : -->


<!-- // On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("img/gif", "img/jpeg", "img/pjpeg", "img/png", "img/x-png", "img/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
    /* Le type est parmi ceux autorisés, donc OK, on va pouvoir 
       déplacer et renommer le fichier */

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}     -->



<!-- Déplacer et renommer le fichier

Par défaut, le fichier téléchargé est stocké dans le répertoire tmp de votre serveur. Mais ce fichier devra sans doute se trouver dans un répertoire de votre projet, il faut donc le déplacer.

Il est nécessaire aussi de renommer le fichier, pour répondre à une éventuelle charte de nommage et surtout pour que l'utilisateur ne puisse tenter d'exécuter le fichier via l'url (le nom sur le serveur sera différent de celui qu'il connaissait).

Pour cela, PHP propose une fonction "2 en 1" : move_uploaded_file().

Exemple : déplacer et renommer un fichier (de type image) de tmp vers un répertoire nommé images d'un projet :

move_uploaded_file($_FILES["fichier"]["tmp_name"], "img/photo.jpg");      

    La logique veut que les contrôles de sécurité ait été réalisés avant le déplacement. -->

    Spécifier des droits sur le fichier

Sur les systèmes d'exploitation (Windows, Linux...), les fichiers possèdent des droits (ou permissions) de lecture, d'exécution et d'écriture accordés aux utilisateurs. Il s'agit d'un système un peu complexe mais qui participe grandement à la sécurité.

Lire ces ressources :

<?php
echo '<br><a href=https://codex.wordpress.org/fr:Modifier_les_Permissions_sur_les_Fichiers>Modifier les permissions sur un fichier</a><br>
<a href=https://www.php.net/manual/fr/function.chmod.php>La fonction chmod() de PHP</a><br>';
?>
</body>
</html>