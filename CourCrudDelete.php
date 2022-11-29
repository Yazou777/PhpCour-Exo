PHP - PDO -> CRUD : Delete



Des enregistrements en trop ? Nous allons pouvoir les supprimer !


Création d'un lien vers le formulaire

Vous voyez sans doute venir l'idée : modifiez la page contenant le détail de votre fiche Artiste (page artist_detail.php) pour ajouter un bouton permettant de la supprimer :

// Début de page : traitement PHP + entête HTML
// ...

    <body>
        Artiste N°<?php echo $myArtist->artist_id ?>
        Nom de l'artiste : <?= $myArtist->artist_name ?>
        Site Internet : <?= $myArtist->artist_url ?>
        <a href="artist_form.php?id=<?= $myArtist->artist_id ?>">Modifier</a>
        <a href="script_artist_delete.php?id=<?= $myArtist->artist_id ?>">Supprimer</a>
    </body>

// Fin de page : fermetures de blocs HTML

Petite particularité pour la suppression : puisqu'a priori il n'est pas nécessaire de ré-afficher un formulaire, on peut directement faire pointer le lien vers le script de suppresion nommé script_artist_delete.php (que nous allons écrire) en envoyant, ici aussi l'ID de la fiche à supprimer, en paramètre à la page via la méthode GET.


    Pour éviter toute suppression involontaire, ajoutez une demande de confirmation (par exemple, en JavaScript), qui permettra si on annule, de stopper le processus de suppression en BDD !



Création du script de suppression

La demande de suppression de fiche est effective ? C'est parti, envoyons l'instruction en BDD !
Créez votre script_artist_delete.php auquel on accèdera grâce à l'URL construite dans notre lien :

https://urlduserveurlocal/script_artist_delete.php?id=10

Le script contiendra, très succintement le code suivant :

<?php
    // Contrôle de l'ID (si inexistant ou <= 0, retour à la liste) :
    if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) GOTO TrtRedirection;

    // Si la vérification est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête DELETE sans injection SQL :
        $requete = $db->prepare("DELETE FROM artist WHERE artist_id = ?");
        $requete->execute(array($_GET["id"]));
        $requete->execute();
        $requete->closeCursor();
    }
    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_modif.php)");
    }

    // Si OK: redirection vers la page artists.php
    TrtRedirection:
    header("Location: artists.php");
    exit;

L'instruction GOTO permet de rediriger la lecture du code vers l'ancre définie. Ici donc, si aucun ID n'a été envoyé en GET, on "saute" tout le traitement du dessous pour faire exécuter uniquement le traitement header() de redirection vers notre liste.
--> Voir ici la documentation PHP sur l'instruction GOTO




PHP - PDO -> CRUD : Delete
Création d'un lien vers le formulaire
Création du script de suppression