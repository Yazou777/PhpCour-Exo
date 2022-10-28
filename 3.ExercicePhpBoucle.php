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
function table($nbr, $nbr2)
{
    $table = '<table border="1"><th></th>';
     
    for ($a=0; $a <= $nbr; $a++) {
    $table .= '<th>'.$a."</th>"; }

    for ($a=0; $a <= $nbr; $a++) {
        $table .= '<tr><th>'.$a.'</th>';
        for ($b=0; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}

echo table(12,12);
?>
</body>
</html>