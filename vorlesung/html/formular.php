<?php
$waren = ['gold','silber','bronze','eisen','Titan'];
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
    ],
    [
        'Hersteller' => "Seat",
        'name' => "XC90",
        'Ps' => '150',
        'Farbe' => "Rot",
        'Baujahr' => "2022"
    ]
];
echo "<select name='drop' id='drop'>";
for ($i = 0; $i < count($auto); $i++) {

    echo "<option value='{$auto[$i]['Hersteller']}'>{$auto[$i]['Hersteller']}</option>";
}
echo "</select>";

function print_checkbox(array $array):void
{
    for ($i = 0; $i < count($array); $i++) {

        echo "<input id='kaufen_$i' type='checkbox' name='kaufen[]' value='$array[$i]'>";
        echo "<label for='kaufen_$i'>$array[$i]</label>";
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

<form action='beamter.php' method='post'>
    Name: <input type="text" name='name' value='peter'><br>
    email: <input type='email' name='email'><br>
    password: <input type='password' name='password'><br>
    <div>Bezahlung: </div>
    <input style='col: rosybrown' id='paypal' type='radio' name='bezahlung' value='paypal'>
    <label for='paypal'>Paypal</label><br>
    <input id='bar' name='bezahlung' type='radio' value='bar' checked>
    <label for='bar'>Bar</label>
    <br>
    <select name='drop' id='drop'>
        <option value='vw'>Volkswagen</option>
        <option value='bmw'>BMW</option>
        <option value='volvo'>Volvo</option>
        <option value='seat'>Seat</option>

    </select>





    <?php
    print_checkbox($waren);


    ?>


<!--    -->
<!--    <input id='kaufen_1' type='checkbox' name='kaufen[]' value='gold'>-->
<!--    <label for='kaufen_1'>Gold</label>-->
<!--    -->
<!--    <input id='kaufen_2' type='checkbox' name='kaufen[]' value='silber'>-->
<!--    <label for='kaufen_2'>Silber</label>-->
<!--    -->
<!--    <input id='kaufen_3' type='checkbox' name='kaufen[]' value='Bronze'>-->
<!--    <label for='kaufen_3'>Bronze</label>-->


    <input type='submit'>




</form>














</body>
</html>
