<?php
var_dump($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$bezahlung = $_POST['bezahlung'];
$drop = $_POST['drop'];
function check_kaufen()
{
    $kaufen = $_POST['kaufen'] ?? [];
    for ($i = 0; $i < count($kaufen); $i++) {
        echo "<div> $kaufen[$i]</div>";
    }
}

function check_bezahlung()
{

    if ($_POST['bezahlung'] === 'bar'){
        echo "Der User hat Bar ausgewaehlt";
    } else{
        echo "Der User hat Paypal ausgewaehlt";
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

echo "<div>Hallo $name. Deine Email ist $email und dein Passwort ist $password</div>";
check_bezahlung();
check_kaufen();
echo "<div>Du willst ein $drop kaufen?</div>"
?>

</body>
</html>
