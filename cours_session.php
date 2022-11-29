<?php
PHP - Les sessions



Définition

La session est un mécanisme qui permet de conserver des données entre 2 pages web.

Par exemple, on peut utiliser les sessions pour stocker des informations liées à l'authentification, le contenu d'un panier ...
Fonctionnement

Pour stocker des informations en session, PHP a recours à la variable $_SESSION. Il s'agit d'une variable superglobale (même type que $_GET ou $_POST etc.) qui se comporte donc comme un tableau PHP avec des paires clé/valeur.

Mais avant toute utilisation de cette variable, il est impératif d'utiliser la fonction session_start() au début de chaque fichier PHP dans lequel on manipulera cette variable et avant tout envoi de requêtes HTTP, c'est-à-dire avant tout echo ou quoi que ce soit d'autre : rien ne doit avoir encore été écrit/envoyé à la page web.

Ensuite, on utilise donc $_SESSION avec entre crochets, un nom de variable suivi de l'affectation d'une valeur :

session_start();

$_SESSION["login"] = "webmaster";

echo $_SESSION["login"];

Nous avons pour le moment en session une variable login qui a pour valeur webmaster.
Dans une autre page PHP, nous pourrons désormais tester si la session existe et autoriser ou non l'utilisateur à voir le contenu d’une page, accéder à des fonctionnalités etc.
L'identifiant de session

Le mécanisme de session repose sur un identifiant unique : l'identifiant de session. Celui-ci est fourni par défaut par PHP. Il s'agit d’une chaîne de caractères alphanumérique, par exemple : jr48dn2gqsliubpq02u0cbchk5.

La fonction session_id() permet d'afficher cet identifiant :

    session_start();

    $_SESSION["login"] = "webmaster";
    $_SESSION["role"] = "admin";

    echo"- session ID : ".session_id();

    session_id() retourne une chaîne vide s'il n'y a pas de session en cours.

Mécanisme

La création d’une session génère donc un identifiant unique stocké à la fois côté client (sur le PC de l’utilisateur, dans un fichier de type cookie) et côté serveur.

Lors des échanges, lorsque le serveur reçoit le cookie contenant l'identifiant de session, il reconstitue les variables de session (le tableau $_SESSION).
Tester la session

Une fois une session initialisée, c'est-à-dire par exemple qu’un utilisateur s’est authentifié avec un identifiant/mot de passe, il reste à contrôler si cet utilisateur peut ou non accéder à la page web. Pour cela, on va utiliser de simples conditions :

    session_start();

    if ($_SESSION["login"]) 
    {
       echo"Vous êtes autorisé à voir cette page.";  
    } 
    else 
    {
       echo"Cette page nécessite une identification.";  
    }

ou

    session_start();

    if ( ! isset($_SESSION["login"]) ) 
    {
        header("Location:index.php");
        exit;
    }

    // Reste du code (PHP/HTML)
    echo"Bonjour ".$_SESSION["login"]."<br>");  

Si la variable de session n'existe pas, on redirige (avec la fonction header()) sur la page index.php. Si au contraire la variable de session login est initialisée, la redirection ne s'exécutera pas et la page s'affichera normalement.
Détruire une session

Pour supprimer une information en session, on utilisera la fonction unset() avec en paramètre la variable de session à détruire. Ceci est utilisé par exemple lorsque l'on a un lien Déconnexion sur un site.

Exemple :

    unset($_SESSION["login"]);
    unset($_SESSION["role"]);

Attention, cela ne suffit pas à détruire complètement et proprement une session, même si toutes les variables contenues dans la session ont été supprimées avec unset().

Voici le code pour détruire proprement une session :

    unset($_SESSION["login"]);
    unset($_SESSION["role"]);

    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }

    session_destroy();

Explications :

    Lignes 1-2 : destruction des variables de session.
    Lignes 4-7 : la fonction setcookie(), nous permets de forcer la date d'expiration
    On détruit le reste de la session, via la fonction session_destroy().

Configuration avancée et sécurité

Le PHP permet une configuration (directives du fichier php.ini) assez fine des sessions : volume de données, durée, mode de stockage et sécurité, ce dernier point étant un sujet important : il en effet possible de détourner des sessions par vol d'identifiant (lecture du cookie contenant l’id de session). Une bonne pratique est d'utiliser la fonction session_regenerate_id() dès que l’on modifie quelque chose en session (ajout d'une variable, modification d’une valeur).




PHP - Les sessions
Définition
Fonctionnement
L'identifiant de session
Mécanisme
Tester la session
Détruire une session
Configuration avancée et sécurité'

?>