PHP - PDO -> CRUD : Create



Si l'administrateur du site Velvet Record veut pouvoir mettre à jour son site, et qu'il n'est pas développeur, il va falloir lui permettre de créer (puis de gérer) ses différentes fiches d'artistes et disques.
Allons-y !


Création du formulaire

Utilisons un formulaire qui permettra de saisir de nouveaux artistes. Créez un fichier artist_new.php, et collez-y le code suivant :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO - Ajout</title>
</head>
<body>

    <h1>Saisie d'un nouvel artiste</h1>

    <a href="artists.php"><button>Retour à la liste des artistes</button></a>

    <br>
    <br>

    <form action ="script_artist_ajout.php" method="post">

        <label for="nom_for_label">Nom de l'artiste :</label><br>
        <input type="text" name="nom" id="nom_for_label">
        <br><br>

        <label for="url_for_label">Adresse site internet :</label><br>
        <input type="text" name="url" id="url_for_label">
        <br><br>

        <input type="submit" value="Ajouter">

    </form>
</body>
</html>

On voit ici que notre formulaire sera envoyé avec la méthode POST, vers une page nommée script_artist_ajout.php. Il s'agit donc d'un script local, faisant partie du même projet, soit, un script que nous allons composer nous-mêmes !


Création du script d'ajout
Récupération des données

Récupérons dans un premier temps les données transmises par le formulaire, puis connectons-nous à la base de données.
Créez le fichier script_artist_ajout.php et collez-y le code suivant :

<?php
    // Récupération du Nom :
    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        $nom = $_POST['nom'];
    }
    else {
        $nom = Null;
    }

    // Récupération de l'URL (même traitement, avec une syntaxe abrégée)
    $url = (isset($_POST['url']) && $_POST['url'] != "") ? $_POST['url'] : Null;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($nom == Null || $url == Null) {
        header("Location: artist_new.php");
        exit;
    }

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "db.php"; 
    $db = connexionBase();

    Pour rappel :
    en PHP, les données envoyées en POST sont stockées dans la superglobale $_POST. Chaque input du formulaire portant un attribut name génère une cellule dans $_POST (qui est un tableau associatif), accessible grâce à la syntaxe suivante : $valeur_input = $_POST["attribut_name"].


Construction de la requête et exécution

Nous voulons maintenant créer un enregsitrement dans notre table artist, contenant les données récupérées via notre formulaire.
Pour ce faire, nous allons créer une requête préparée afin d'éviter les injections SQL. Nous utiliserons ici des marqueurs nommés afin d'envoyer nos données.

Ajoutez le code suivant à la suite de script_artist_ajout.php :


try {
    // Construction de la requête INSERT sans injection SQL :
    $requete = $db->prepare("INSERT INTO artist (artist_name, artist_url) VALUES (:nom, :url);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":url", $url, PDO::PARAM_STR);
    $requete->bindValue(":nom", $nom, PDO::PARAM_STR);

    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_artist_ajout.php)");
}

// Si OK: redirection vers la page artists.php
header("Location: artists.php");

// Fermeture du script
exit;
?>

    NB: comme notre colonne artist_id est en AUTO INCREMENT, nous n'avons pas besoin d'associer une valeur pour cette colonne.


Ici la requête préparée d'ajout qui contient des données de formulaire à envoyer, est décomposée en 3 étapes :

    La préparation de l'instruction (INSERT), avec des marqueurs nommés (:nom, :url) aux endroits où il faut injecter les données
    L'envoi des données à la requête avec la méthode bindValue()
    Le lancement du traitement avec la méthode execute()

Une fois le traitement finalisé, et nos données ajoutées en BDD si tout va bien, le script renvoie l'utilisateur vers une autre page (ici, artists.php), et se clôture (exit).

    Si vous arrivez jusqu'ici, vérifiez en BDD que votre enregistrement est bien arrivé !


Vous remarquerez en outre qu'on a placé tout notre traitement dans un TRY ... CATCH afin de récupérer le message d'erreur du SGBDr (MariaDB, MySQL, etc.) le cas échéant, grâce aux informations retournées par la méthode errorInfo() de PDO.

    Faites plusieurs tests d'erreurs volontaires ("cassez" la syntaxe de l'instruction INSERT - par exemple en écrivant atist au lieu de artist, retirez un bindValue(), etc.) pour voir les messages d'erreur générés par votre SGBDr !




PHP - PDO -> CRUD : Create
Création du formulaire
Création du script d'ajout
    Récupération des données
    Construction de la requête et exécution