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
echo "Société : " . $_REQUEST['societe'] . "<br> " 
."Personne a contacter : ". $_REQUEST['pac'] . "<br>"
."Adresse de l'entreprise : ". $_REQUEST['ad'] . "<br>"
."Code postal : ". $_REQUEST['cp'] . "<br>"
."Ville : ". $_REQUEST['ville'] . "<br>"
."E-mail : ". $_REQUEST['email'] . "<br>"
."Téléphone : ". $_REQUEST['phone'] . "<br>"
."Sélectionnez l'environnement technique du projet : ". $_REQUEST['commentaire'] . "<br>";
  ?>
    
</body>
</html>