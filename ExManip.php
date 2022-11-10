<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php

// Lecture d'un fichier

// Téléchargez ce fichier, qui contient une liste de sites indispensables à la compréhension du monde moderne.

// Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.
   
// Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.

$file = file('https://ncode.amorce.org/ressources/Pool/MS_FULL_STACK/PHP/src/liens.txt');
foreach($file as $fil)
{

    echo "<a href=$fil>$fil</a><br>";
}

// Récupération d'un fichier distant

// Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.

// Cette liste est disponible à cette adresse : http://bienvu.net/misc/customers.csv.

// Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont séparés par une virgule ,.

//     Utilisez la fonction file() pour récupérer le contenu de ce fichier.

//     Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()

//     Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.


$file = file('customers.csv');
// var_dump($file);

foreach($file as $f)
{
    // var_dump($f);
    foreach(explode(',',$f)as $x){
        echo $x;
    }
}

?>
<div class="table-responsive">
<table class="table-bordered">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Région</th>
        </tr>
    </thead>
    <tbody>

     <?php
        $coordonnees = file('customers.csv');
        foreach ($coordonnees as $coordonnee) {
            $caracteristique = explode(",", $coordonnee);
        ?>
            
        <tr>
            <?php 
            for($i = 0; $i <= 5; $i++) {
                echo '<td>'.$caracteristique[$i].'</td>';
            }
            ?>
        </tr>
        <?php
    }
    ?> 
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>