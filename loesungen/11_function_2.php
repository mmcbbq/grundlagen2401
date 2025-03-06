<?php
# Schreibe eine Funktion multiplikation.
# Sie soll 2 int parameter haben.
#Wenn man nur einen Parameter uebergibt soll dieser mit 2 multipliziert werden
# wenn man 2 Paramter uebergibt sollen diese miteinander multipliziert werden.

function multiplikation(int $a, int $b = 2): int|float
{
    return $a * $b;
}

# Schreibe eine Funktion circle_area.
# Sie soll die Flaeche eines Kreises berechnen.
# Es soll moeglich sein den Radius oder den Durchmesser zu uebergeben.
function circle_area(int $int, bool $radius = true): int|float
{
    if ($radius) {
        $int = $int * 2;
    }
    return pi() * (($int / 2) ** 2);

}


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
                     string $black_field = "X",
                     int $width = 8, int $length = 8):string
{
    $row = '';
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if (($j + $i) % 2 == 0){
                $row .= $white_field;
            } else{
                $row .= $black_field;
            }
        }
        $row .= "\n";
    }
    return $row;
}

print chess_board('a','b',5,5);


var_dump(str_split("hallo"));


