<?php
$small = [
    [
        "name" => "Melanie Reilly",
        "email" => "jacksonlopez@example.com",
        "anzahl" => 40
    ],
    [
        "name" => "Gregory Russell",
        "email" => "swilliams@example.net",
        "anzahl" => 8
    ],
    [
        "name" => "Aaron Ross",
        "email" => "kevincline@example.org",
        "anzahl" => 99
    ],
    [
        "name" => "Meredith Coleman",
        "email" => "qvargas@example.com",
        "anzahl" => 60
    ],
    [
        "name" => "Michael Salazar",
        "email" => "patriciasmith@example.net",
        "anzahl" => 12
    ],
    [
        "name" => "Patricia Davis",
        "email" => "hernandezlindsay@example.net",
        "anzahl" => 4
    ],
];

$auto = [
    [
        'Hersteller' => "Vw",
        'name' => "Golf",
        'Ps' => '90',
        'Farbe' => "Blau",
        'Baujahr' => "1996"
    ],
    [
        'Hersteller' => "BMW",
        'name' => "3",
        'Ps' => '120',
        'Farbe' => "Gelb",
        'Baujahr' => "2015"
    ],
    [
        'Hersteller' => "Volvo",
        'name' => "XC90",
        'Ps' => '150',
        'Farbe' => "Rot",
        'Baujahr' => "2022"
    ]
];

$array_keys = array_keys($small[0]);

//var_dump($array_keys);



?>


<!DOCTYPE html>
<html>
<body>
<div id='1' class='hallo' style='background-color: #29d9b3; color: #94218e; '>Hallo Welt</div>

<table>
    <tr>
        <?php
        for ($j = 0; $j <count($small[0]) ; $j++) {
            echo "<th> {$array_keys[$j]}  </th>";

        }

        ?>

    </tr>

    <?php
    $count = count($small);

    for ($i = 0; $i < $count; $i++) {

        if ($i % 2 == 0){
            $back_color = 'magenta';
            $color = '#ffec4e';
        } else {
            $back_color = 'red';
            $color = "darkblue";
        }


        echo "<tr  style='background-color: $back_color; color: $color'>";
        for ($k = 0; $k < count($array_keys); $k++) {
            echo "<td>{$small[$i][$array_keys[$k]]} </td>";
        }

//        echo "<td>{$small[$i]['name']} </td>";
//        echo "<td>{$small[$i]['email']} </td>";
//        echo "<td>{$small[$i]['anzahl']}</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>