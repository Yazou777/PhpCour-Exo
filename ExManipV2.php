<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table-bordered">
    <thead>
        <tr>
            <?php
           $table= "<table border='1'>
            <th>Prénom</th>
            <th>Nom</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Région</th>";

            $file = file('customers.csv');
            foreach($file as $x){
                $table.="<tr>";
                foreach(explode(',',$x) as $y){
                    $table.="<td>$y</td>";
                }
                $table.="<tr>";
            }
            $table.="</table>";
            echo ($table);
    
        ?>
</body>
</html>