<?php
function create_table(array $array, string $color_1 = "red", string $color_2 ="green")
{

    $rows = count($array);
    $inner_keys = array_keys($array[0]);
    $count_keys = count($inner_keys);
    echo "<table>";
    for ($i = 0; $i < $rows; $i++) {
        if ($i %  2 ==0){
            $color = $color_1;
        } else{
            $color = $color_2;
        }
        echo '<tr>';
        for ($j = 0; $j < $count_keys; $j++) {
            $row_head = ucfirst($inner_keys[$j]);

            echo "<th>";
            echo "{$row_head}";
            echo "</th>";
        }
        echo '</tr>';
        echo "<tr style='background-color: $color'>";

        for ($k = 0; $k < $count_keys; $k++) {
            echo "<td>";
            echo "{$array[$i][$inner_keys[$k]]}";
            echo "</td>";
        }
        echo '<tr>';
    }
    echo "</table>";
}

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
create_table($small,);
create_table($auto,);
?>
</body>
</html>