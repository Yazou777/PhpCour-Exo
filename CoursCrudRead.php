PHP - PDO -> CRUD : Read



Créons ici une interface permettant de visualiser le détail d'une fiche (pour éventuellement ensuite, la modifier ou la supprimer).


Création d'un lien vers la fiche

Modifiez le tableau contenant la liste de vos artistes (page artists.php) pour ajouter une colonne qui contiendra un lien de redirection vers la fiche détaillée chaque artiste :

// Début de page : traitement PHP + entête HTML
// ...

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <!-- Ici, on ajoute une colonne pour insérer un lien -->
            <th></th>
        </tr>

        <?php foreach ($tableau as $artist): ?>
        <tr>
            <td><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>
            <!-- Ici, on ajoute un lien par artiste pour accéder à sa fiche : -->
            <td><a href="artist_detail.php?id=<?= $artist->artist_id ?>">Détail</a></td>
        </tr>
        <?php endforeach; ?>

    </table>

// Fin de page : fermetures de blocs HTML

    Testez ce nouvel affichage !

En survolant chaque lien avec la souris, on se rend vite compte

    que Détail renvoie systématiquement vers la page artist_detail.php,
    et qu'un paramètre nommé id, contenant l'identifiant de la fiche de l'artiste concerné dans la ligne du tableau, est envoyé à cette page via la méthode GET (visible dans l'URL grâce au ?).


Construisons maintenant cette page artist_detail.php !



Affichage des informations d'un enregistrement

Nous allons maintenant concevoir la page permettant d'afficher le détail d'un de nos artistes. Le numéro identifiant de la fiche a été passé en paramètre à la page, via la méthode GET.

Si la page se nomme artist_detail.php, elle sera donc déclenchée de cette façon :

https://urlduserveurlocal/artist_detail.php?id=4

Et contiendra le code suivant :

<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO - Détail</title>
    </head>
    <body>
        Artiste N°<?php echo $myArtist->artist_id ?>
        Nom de l'artiste : <?= $myArtist->artist_name ?>
        Site Internet : <?= $myArtist->artist_url ?>
    </body>
</html>


Testez cette page avec différentes valeurs pour vérifier son bon fonctionnement !

Essayez avec un ID d'artiste qui n'existe pas : la variable $myArtist contient la valeur null (vérifiez avec un var_dump();).

Faites ensuite en sorte que votre page affiche un message particulier si la fiche n'est pas trouvée en BDD.




PHP - PDO -> CRUD : Read
Création d'un lien vers la fiche
Affichage des informations d'un enregistrement