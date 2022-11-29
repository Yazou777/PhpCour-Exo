PHP - PDO -> CRUD : Update



Une fois nos enregistrements en BDD, il faut pouvoir modifier les fiches afin de les mettre à jour.


Création d'un lien vers le formulaire

Modifiez la page contenant le détail de votre fiche Artiste (page artist_detail.php) pour ajouter un bouton permettant de la modifier :

// Début de page : traitement PHP + entête HTML
// ...

    <body>
        Artiste N°<?php echo $myArtist->artist_id ?>
        Nom de l'artiste : <?= $myArtist->artist_name ?>
        Site Internet : <?= $myArtist->artist_url ?>
        <a href="artist_form.php?id=<?= $myArtist->artist_id ?>">Modifier</a>
    </body>

// Fin de page : fermetures de blocs HTML

Ce bouton nous envoie sur une page nommée artist_form.php, qui a la possibilité de réceptionner, via la méthode GET (visible dans l'URL grâce au ?), l'ID de la fiche à modifier.


A nous maintenant de fournir un formulaire de modification à notre utilisateur !



Création du formulaire

Notre formulaire de modification, pour la fiche n°8 par exemple, sera appelé grâce à l'URL suivante :

https://urlduserveurlocal/artist_form.php?id=8

De la même manière que pour le formulaire d'ajout, créons notre formulaire HTML, appelé cette fois artist_form.php pour la modification d'une fiche.
Les données saisies dans le formulaire seront envoyées vers script_artist_modif.php via la méthode POST :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
</head>
<body>

    <h1>Artiste n°<?= $resultat->artist_id; ?></h1>

    <a href="artists.php">Retour à la liste des artistes</a>

    <br>
    <br>

    <form action ="script_artist_modif.php" method="post">

        <label for="nom_for_label">Nom de l'artiste :</label><br>
        <input type="text" name="nom" id="nom_for_label">
        <br><br>

        <label for="url_for_label">Adresse site internet :</label><br>
        <input type="text" name="url" id="url_for_label">
        <br><br>

        <input type="reset" value="Annuler">
        <input type="submit" value="Modifier">

    </form>
</body>
</html>


Mis à part la particularité de l'ID, rien d'exceptionnel jusqu'ici... Sauf que notre formulaire initial est vide !
Il nous faut donc charger en amont les informations de notre enregistrement et les injecter dans les champs.

Ajoutez le bloc PHP ci-dessous en haut de la page artist_form.php, avant le HTML :

    // On charge l'enregistrement correspondant à l'ID passé en paramètre :
    require "db.php";
    $db = connexionBase();
    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    $requete->execute(array($_GET["id"]));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();

Les données de notre artiste (si tant est que l'enregistrement a bien été trouvé en BDD), se trouvent donc maintenant dans la variable $myArtist.

De la même manière, ici, que pour l'affichage des données de l'artiste dans la page artist_detail.php, nous allons injecter les différentes informations dans le champ de formulaire correspondant :

    Souvenez-vous que le contenu des champs HTML est stocké dans l'attribut value !

    <form action ="script_artist_modif.php" method="post">

        <input type="hidden" name="id" value="<?= $myArtist->artist_id ?>">

        <label for="nom_for_label">Nom de l'artiste :</label><br>
        <input type="text" name="nom" id="nom_for_label" value="<?= $myArtist->artist_name ?>">
        <br><br>

        <label for="url_for_label">Adresse site internet :</label><br>
        <input type="text" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>">
        <br><br>

        <input type="reset" value="Annuler">
        <input type="submit" value="Modifier">

    </form>

    Avez-vous remarqué l'input contenant l'ID, ajouté au formulaire et contenant l'attribut type="hidden" ?
    Comme nous allons modifier notre fiche, nous aurons besoin d'une requête UPDATE, qui aille sélectionner l'enregistrement voulu pour le mettre à jour.
    L'ID d'un enregistrement ne doit pas être modifié, donc le champ ne doit pas être laissé au libre court de l'utilisateur, mais pour autant, nous avons besoin que l'ID soit envoyé avec les données dans le POST pour que notre script_artist_modif.php puisse le récupérer.

    Au stade où nous en sommes, un champ caché est donc un très bon compromis !
    Mais nous pourrions aussi, par exemple, le faire apparaitre en lecture seule avec l'attribut readonly...



Création du script de modification

Le principe est le même que pour un formulaire d'ajout (contrôles de saisie à faire, redirection éventuelle vers le formulaire, etc.), si ce n'est que, évidemment, l'instruction à écrire pour le traitement en BDD sera non pas, un INSERT, mais un UPDATE :

<?php
    // Récupération des valeurs :
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $nom = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : Null;
    $url = (isset($_POST['url']) && $_POST['url'] != "") ? $_POST['url'] : Null;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($id == Null) {
        header("Location: artists.php");
    }
    elseif ($nom == Null || $url == Null) {
        header("Location: artist_form.php?id=".$id);
        exit;
    }

    // Si la vérification des données est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db->prepare("UPDATE artist SET artist_name = :nom, artist_url = :url WHERE artist_id = :id;");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":url", $url, PDO::PARAM_STR);

        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_modif.php)");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: artist_detail.php?id=" . $id);
    exit;

    Vous vous en doutez... : vérifiez en BDD que votre mise à jour est OK !




PHP - PDO -> CRUD : Update
Création d'un lien vers le formulaire
Création du formulaire
Création du script de modification