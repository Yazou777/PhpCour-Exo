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
// le new de datetime est important
//Trouvez le numéro de semaine de la date suivante : 14/07/2019.

// $date = DateTime::createFromFormat('j/m/Y','14/07/2019');
$date = new DateTime('14-07-2019');
var_dump($date);
echo $date->format('W');

// Combien reste-t-il de jours avant la fin de votre formation ?

$today = new datetime();
var_dump($today);
$fin = new DateTime('2022-12-02');
$interval = $fin->diff($today);

echo $interval->format('%a jours restant').'<p>';

// Comment déterminer si une année est bissextile ? 
// si 1 c'est une année bisexstyle sinon 0 
$date = new datetime('2024-05-05');
echo $date->format('L');

// Montrez que la date du 32/17/2019 est erronée. 

$date = '32/17/2019';
$dateTime = DateTime::createFromFormat('m/d/Y', $date);

$errors = DateTime::getLastErrors();
var_dump($errors);
if ($errors["error_count"]>0 || $errors["warning_count"]>0)
{
    echo 'date érronée<p>';
}

// Affichez l'heure courante sous cette forme : 11h25.

$dateActuel = new DateTime();
echo $dateActuel ->format("H\hi")."<p>";

// Ajoutez 1 mois à la date courante. 

$dateActuel -> add(new dateinterval('P1M')); /* P : Period M : mois*/
echo $dateActuel ->format("d/m/Y").'<p>';

// Que s'est-il passé le 1000200000 ?

// methode 1 :
echo date('d/m/Y','1000200000').' Boum les 2 tours<p>';

// methode utilisant datetime :
// obligé d'utiliser createFromFormat qunad on part d'un timestamp
// U : format timestamp
$date = DateTime::createFromFormat('U','1000200000');
echo $date->format("d/m/Y").' Boum les 2 tours<p>';

  ?> 
</body>
</html>