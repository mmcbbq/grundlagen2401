


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
    <div>Kaufe ein Auto</div>

    <form action='auto_beamter.php' method='get'>
        <label for='fname' >Vorname:</label>
        <input id='fname' type='text' name='fname'>
        <br>
        <label for='lname'>Nachname</label>
        <input id='lname' type='text' name='lname'>
        <br>
        <label for='red'>Rot</label>
        <input id='red' type='radio' name='color' value='red'>
        <br>
        <label for='green'>Grün</label>
        <input id='green' type='radio' name='color' value='green'>
        <br>

        <label for='blue'>Blau</label>
        <input id='blue' type='radio' name='color' value='blue'>

        <br>
        <label for='aus_1'>ABS</label>
        <input id='aus_1' type='checkbox' name='aus[]' value='abs'>
        <br>
        <label for='aus_2'>Klima</label>
        <input id='aus_2' type='checkbox' name='aus[]' value='klima'>
        <br>
        <label for='aus_3'>Airbag</label>
        <input id='aus_3' type='checkbox' name='aus[]' value='airbag'>
        <br>
        <label for='marke'>Marke</label>
        <select id='marke' name='marke'>
            <option value='bmw'>BMW</option>
            <option value='volvo'>Volvo</option>
            <option value='vw'>VW</option>
            <option value='seat'>seat</option>
        </select>
        <input type='submit' value='Ok'>





    </form>


</body>
</html>