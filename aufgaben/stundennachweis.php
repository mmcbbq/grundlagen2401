
<?php

function create_Stundennachweis(int $tage):void
{

    echo "<table>";

    echo '<tr>';
        echo '<th>Tag</th>';
        echo '<th>Arbeitsbeginn</th>';
        echo '<th></th>';
        echo '<th>Arbeitsende</th>';
        echo '<th>Zeitstunden</th>';
        echo '<th>Bemerkung/ Unterschrift</th>';
        echo '<th>Vermerk durch BBQ</th>';
    echo '</tr>';


    $color_1 = 'deepskyblue';
    $color_2 = 'rosybrown';




    for ($i = 0; $i < $tage; $i++) {
        $tag = $i + 1;
        if ($i % 2 == 0){
            $color = $color_1;
        } else{
            $color = $color_2;
        }

        echo "<tr style='background-color: $color'>";
        echo "<td>$tag</td>";
        echo '<td></td>';
        echo '<td>-</td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '</tr>';
    }





}


?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
<?php
create_Stundennachweis(31);
?>
</body>
</html>

