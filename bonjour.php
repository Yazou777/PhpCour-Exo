<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <?php
            $euro=6.55957;
            printf("%.2f FF<br />",$euro);
            $money1 = 68.75;
            $money2 = 54.35;
            $money = $money1 + $money2;
            // echo $money affichera "123.1";
            echo "affichage sans printf : " . $money . "<br />";
            $monformat = sprintf("%01.2f", $money);

            // echo $monformat affichera "123.10"
            echo "affichage avec printf : " . $monformat . "<br />";

            $year="2002";
            $month="4";
            $day="5";
            $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day) ;

            // echo $varDate affichera "2002-04-05"
            echo "affichage avec sprintf : " . $varDate;


            // La fonction var_dump()

// La fonction var_dump() permet d'afficher des informations (nom, type, valeur, longueur/nombre d'éléments si tableau) sur n'importe quelle variable, tous types compris (scalaire, tableau, objet...) :
            $myVar = "bonjour";
            var_dump($myVar);

            $myVar = "KO";

if ($myVar != "OK") 
{
    error_log("Ouh là pas bien");
    // Message enregistré dans le fichier 'C:/<repertoire_logs>/php_error.log' 
}


// Les "variables variables"
$var1 = "bonjour";
$$var1 = "le monde"; 
echo $bonjour."<br />";
// affichera "le monde"

// Les constantes
define("EURO", 6.55957);
echo EURO."<br />"; // affiche 6.55957

// Les métaconstantes
echo "Fichier : " . __FILE__ . ", ligne : " . __LINE__ ."<br />";

// Les Superglobales
$_GET["societe"] = "Afpa";
echo $_GET["societe"]."<br />"; // Affiche 'Afpa' 

// Les variables système : $_SERVER
echo $_SERVER["SERVER_NAME"]."<br />";

var_dump($_SERVER);
        ?>
        </body>
    </html>