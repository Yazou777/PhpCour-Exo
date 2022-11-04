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
    date_default_timezone_set("Europe/Paris"); 
    echo time().'<p>'; /*1667468527*/
    echo "Nous sommes le " . date("d/m/Y")."<br>"; /*Nous sommes le 03/11/2022*/
    echo date("H:i:s")."<br>"; /*10:42:07 */

   /* on déclare une instance de l'objet PHP 'DateTime' :*/
    $oDate = new DateTime(); /*Pour travailler sur une autre date que celle du jour, par exemple une valeur de date enregistrée en base de données, il faut passer la valeur en argument :*/
    var_dump($oDate);


    // $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (parexemple)
// $oDate = new DateTime($macolonne_sql);
// echo $oDate->format("d/m/Y H:h:i");
// Ceci affichera 16/11/2018 11h26 (l'affichage des secondes a été volontairement omis).            

// Récupérer les erreurs de l'objet DateTime
// L'objet DateTime permet de récupérer les erreurs grâce à DateTime::getLastErrors :
$date = "2015-12-06";
$dateTime = DateTime::createFromFormat('m/d/Y', $date);

$errors = DateTime::getLastErrors();

if (!empty($errors['warning_count'])) 
{
   return FALSE;
}

// Vérifier une date
$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}


$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}
  
  ?> 
</body>
</html>