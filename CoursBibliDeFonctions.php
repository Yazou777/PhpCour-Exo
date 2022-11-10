<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PHP - Les bibliothèques de fonctions



Imaginons que nous voulions utiliser une fonction writeMessage() dans toutes les pages d'un site : il faudrait mettre le code de cette fonction dans chacune des pages. Imaginez alors pour un site de 1000 pages : ce n'est clairement pas possible en termes de maintenabilité du code, car il faudrait reporter 1000 fois la moindre modification effectuée dans le code de la fonction writeMessage().

Pour résoudre ce problème, PHP offre un mécanisme : l'inclusion de fichiers ! On parle alors de fichier externe.  -->



<!-- Inclusion de fichiers externes

Créez le fichier suivant, que l'on appellera hello.php :

<?php 
    // Fichier 'hello.php'

    function writeMessage($text) {
    $html = "<h1>".$text."</h1>";
    echo $html;
    }  
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inclusion de fichiers PHP</title>
        <link rel="stylesheet" href="css/style.css">        
    </head>
    <body>
        <?php 
            $message= "Welcome to AFPA !"; 
            writeMessage($message); 
        ?>
        <br>
        <?php 
            writeMessage("Bonjour tout le monde !"); 
        ?>
    </body>
</html>


Tout d'abord, nous allons déplacer la fonction writeMessage() dans un second fichier PHP nommé fonctions.php.
Ce fichier fonctions.php sera un fichier de bibliothèque (ou encore librairie) de code, avec pour seul contenu le code de la fonction writeMessage() :

<?php
    // Fichier 'fonctions.php'

    function writeMessage($text) {
        $html = "<h1>".$text."</h1>";
        echo $html;
    }
?>


L'objectif est donc de factoriser à un seul emplacement le code des fonctions utilisées dans plusieurs pages, cela rejoint la définition même d'une fonction qui est d'être réutilisable.

    On pourra bien entendu par la suite, ajouter autant de fonctions que nécessaire dans notre fichier de bibliothèque fonctions.php !


Dans le fichier d'origine hello.php, on peut maintenant supprimer le code de la fonction writeMessage() et le remplacer par l'inclusion (chargement ou appel) du fichier fonctions.php, via la fonction PHP native include() qui prend en argument le chemin vers le fichier et son nom :

include("fonctions.php");  

Cette fonction include() permet de recopier dans la page le contenu du fichier dont l'URL est passée en paramètre.

Il suffit donc de recopier cette ligne dans toutes les pages où nous voulons utiliser notre bibliothèque de fonctions personnelle.

Ce qui nous donne :

<?php
    // Fichier 'hello.php'

    include("fonctions.php"); 
    $message = "Hello world !";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Inclusion de fichiers PHP</title>
    </head>
    <body> 
        <?php 
            writeMessage($message); 
        ?>
        <br>
        <?php 
            writeMessage("Bonjour tout le monde !"); 
        ?>
    <script src="js/scripts.js"></script>
    </body>
</html> -->



Découpage d'une page HTML

Non seulement vous allez trouver sur le web des bibliothèques de fonctions libres de droits à inclure dans vos programmes, mais vous allez pouvoir les utiliser pour _découper du simple code HTML en plusieurs fichiers.

Par exemple, vous pourriez découper une page HTML de la façon suivante : en-tête, contenu principal et pied de page :

fichier index.php

<?php 
    include("header.php");
?>

    <div class="row">
        <div class="col-lg-8 col-sm-12">
        </div>
    </div>

<?php 
    include("footer.php");
?>

fichier header.php

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Jarditou boostrap</title>
</head>
<body>
    <div class="container">
        <header>
            ...
            <nav>
                ...
            </nav>
        </header>

fichier footer.php

        <footer class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="#" class="nav-link">mentionslégales</a><li>
                <li class="nav-item"><a href="#" class="nav-link">horaires</a><li>
                <li class="nav-item"><a href="#" class="nav-link">plandusite</a><li>
            </ul>
        </footer>
    </div> <!-- fermerure de la div class="container" -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="assets/js/scripts.js"></script>

</body>
</html>



Les différentes fonctions d'inclusion

PHP fournit 4 fonctions d'inclusion de fichiers :

    include() : lève une erreur de type avertissement (warning), c'est-à-dire qui ne bloque pas l'exécution du code suivant l'appel de la fonction include().
    require() : lève une erreur dite fatale, le script s'arrête PHP là.
    include_once() : pareil que pour include() mais le fichier n'est chargé qu'une seule fois, lors du premier appel dans le site
    require_once() : pareil que pour require() mais le fichier n'est chargé qu'une seule fois, lors du premier appel dans le site



Vérification de l'existence d'un fichier

Dans le cadre d'une inclusion de fichier, il faut s'assurer que le fichier à inclure existe bien. Ceci se fait avec la fonction PHP file_exists(), à laquelle on passe le chemin du fichier dont on veut vérifier l'existence :

<?php
    if (file_exists("chemin/entete.php") ) 
    {
        include("chemin/entete.php");
    } 
    else 
    {
        // Erreur (à gérer)
    }
?>


    Sur vos projets, découpez vos pages de la même manière !




</body>
</html>