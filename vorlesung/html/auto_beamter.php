<?php
$fname = $_GET['fname'] ?? 'Joe';
$lname = $_GET['lname'] ?? '';
$color = $_GET['color'];
$aus_array = $_GET['aus'];
$marke = $_GET['marke'];


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

<table style='border: solid 1px'>

    <tr style='border: solid 1px'>
        <td style='border: solid 1px'><?php echo $fname." ".$lname ?></td>
        <td><?php echo $marke ?></td>
    </tr>
    <tr>
        <td><?php echo $color ?></td>
        <td style='background-color: <?php echo $color ?>'></td>
    </tr>

    <?php
    for ($i = 0; $i < count($aus_array); $i++) {
        echo "<tr>";
        echo "<td>";
        echo $aus_array[$i];
        echo "</td>";
        echo "</tr>";
    }

    ?>

</table>

</body>
</html>