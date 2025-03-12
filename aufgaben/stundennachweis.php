
<?php

$urlaub = ['6.3.25','7.3.25','15.3.25','25.3.25']; // tag,monat,jahr


function create_Stundennachweis(int $monat,int $year, string $anfang, string $ende,string $bemerkung = "",array $urlaub):void
{
    $date = new DateTime("$year-$monat-1T$anfang");

    $date_end = new DateTime("$year-$monat-1T$ende");
    $tage_im_monat = $date->format('t');

    $zeitstunden = date_diff($date,$date_end);

    $zeitstunden = $zeitstunden->format('%h:%i');





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




    for ($i = 1; $i <= $tage_im_monat; $i++) {

        $date_for_weekend = new DateTime("$year-$monat-$i");
        $urlaub_string = $date_for_weekend->format('j.n.y');

        $we = $date_for_weekend->format('N');

        if ($i % 2 == 0){
            $color = $color_1;
        } else{
            $color = $color_2;
        }
        $value_anfang = $anfang;
        $value_ende = $ende;
        $value_bemerkung = $bemerkung;
        $value_zeitstunden = $zeitstunden;
        $value_bemerkung_bbq = '';
        if ($we == 6 or $we == 7){
            $color ='grey';
            $value_anfang = '';
            $value_ende = "";
            $value_bemerkung = '';
            $value_zeitstunden = '';
        } elseif (in_array($urlaub_string,$urlaub)){
            $value_anfang = '';
            $value_ende = "";
            $value_bemerkung = '';
            $value_zeitstunden = '';
            $value_bemerkung_bbq = 'Urlaub';
        }





        echo "<tr style='background-color: $color'>";
        echo "<td>$i</td>";
        echo "<td>$value_anfang</td>";
        echo '<td>-</td>';
        echo "<td>$value_ende</td>";
        echo "<td>$value_zeitstunden</td>";
        echo "<td>$value_bemerkung</td>";
        echo "<td>$value_bemerkung_bbq</td>";
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
create_Stundennachweis(3,2025,'8:30', '16:00','viel arbeit',$urlaub);
?>
</body>
</html>

