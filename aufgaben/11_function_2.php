<?php
# Schreibe eine Funktion multiplikation.
# Sie soll 2 int parameter haben.
#Wenn man nur einen Parameter uebergibt soll dieser mit 2 multipliziert werden
# wenn man 2 Paramter uebergibt sollen diese miteinander multipliziert werden.

function multiplikation(int $a, int $b = 2): int
{
    return $a * $b;
}


# Schreibe eine Funktion circle_area.
# Sie soll die Flaeche eines Kreises berechnen.
# Es soll moeglich sein den Radius oder den Durchmesser zu uebergeben.

function circle_area(int|float $d, bool $r = false): float
{
    if ($r) {
        $d = $d * 2;
    }

    $area = ($d / 2) ** 2 * pi();

    return $area;
}

function area_cirle(int|float|null $diameter = NULL, int|float|null $radius = null): float
{
    if ($diameter !== null) {
        return $diameter * pi();
    } elseif ($radius !== null) {
        return 2 * $radius * pi();
    } else {
        return 0;
    }
}

echo "\nFläche bei Durchmesse 4 = " . area_cirle(4);
echo "\nFläche bei Durchmesse 4 = " . area_cirle(diameter: 4);
echo "\nFläche bei radius 2 = " . area_cirle(radius: 2);
echo "\nFläche von void = " . area_cirle();


# Schreibe eine Funktion chess_board
# param 1:string white_field
# param 2:string black_field
# param 3: int width
# param 4: int length
# Es soll ein Schachbrettmuster ausgegeben werden

# white_field = "a"
# black_field = "b"
# width = 3
# length = 4

# ausgabe

# a b a
# b a b
# a b a
# b a b

#wenn nichts uebergeben wird soll folgendes ausgegeben werden
# OXOXOXOX
# XOXOXOXO
# OXOXOXOX
# XOXOXOXO
# OXOXOXOX
# XOXOXOXO
# OXOXOXOX
# XOXOXOXO

function chess_board(string $white_field = 'O',
                     string $black_field = 'X',
                     int    $width = 8,
                     int    $length = 8): string
{
    $return = "";
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if (($j + $i) % 2 == 0) {
                $return = $return . $white_field;
            } else {
                $return .= $black_field;
            }
        }
        $return .= "\n";
    }
    return $return;
}

print_r("\n");
print_r("\n");
print_r("\n");
print_r("\n");
print chess_board('a', 'b', 2, 3);
print chess_board();


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
    [
        "name" => "Albert Smith",
        "email" => "andrea66@example.com",
        "anzahl" => 13
    ],
    [
        "name" => "James Young",
        "email" => "hphillips@example.com",
        "anzahl" => 82
    ],
    [
        "name" => "Jennifer Mahoney",
        "email" => "natashabaxter@example.net",
        "anzahl" => 87
    ],
    [
        "name" => "John Smith",
        "email" => "cherylhoward@example.org",
        "anzahl" => 87
    ]];

# Schreibe Funktionen

# Alle Funktionen haben ein Parameter costumers das ein verschachteltes array ist. siehe small

# best_costumer(array $costumers) return ein array mit dem costumer mit den höchste anzahl
/**
 * @param array $costumers
 * @return void
 */
function best_costumer(array $costumers): array
{
    $best = $costumers[0];
    for ($i = 0; $i < count($costumers); $i++) {
//        print $best['anzahl']." vergleich" . $costumers[$i]['anzahl'];
        if ($best['anzahl'] < $costumers[$i]['anzahl']) {
//            print 'ich bin in der if';
            $best = $costumers[$i];
        }
    }

    return $best;
}

var_dump(best_costumer($small));


# worst_costumer(array $costumers) return ein array mit dem costumer mit den niedrigsten anzahl
function worst_costumer(array $costumers): array
{
    $best = $costumers[0];
    for ($i = 0; $i < count($costumers); $i++) {
//        print $best['anzahl']." vergleich" . $costumers[$i]['anzahl'];
        if ($best['anzahl'] > $costumers[$i]['anzahl']) {
//            print 'ich bin in der if';
            $best = $costumers[$i];
        }
    }

    return $best;
}

print_r(worst_costumer($small));
# change_email(array $costumers) return ein array das die emails der use aendert.
//"name" => "John Smith",
//        "email" => "cherylhoward@example.org",
//        "anzahl" => 87
function change_email(array $costumers):array
{
    $new_costumers = []; // mein neues array

    for ($i = 0; $i < count($costumers); $i++) {

        $name_array = explode(" ",$costumers[$i]['name']); //"John Smith" -> explode ['John','Smith']
        $lname = $name_array[1]; // lname = 'Smith'
        $fname_chr = substr($name_array[0],0,1); // -> 'J'
        $new_email = $fname_chr.".".$lname.'@bbq.de'; //-> J.Smith@bbq.de
        $new_email = strtolower($new_email); // -> j.smith@bbq.de

        $costumer = ['name' => $costumers[$i]['name'],
                    'email' => $new_email,
                    'anzahl' => $costumers[$i]['anzahl']
            ]; // bau das innere array
        $new_costumers[] = $costumer; // fuege das innere in das aussen
    }
    return $new_costumers;
}

var_dump(change_email($small));

# aus [
//          "name" => "John Smith",
//        "email" => "cherylhoward@example.org",
//        "anzahl" => 87
//    ]
#wird
//[
//          "name" => "John Smith",
//        "email" => "j.smith@bbq.de",
//        "anzahl" => 87
//    ]








