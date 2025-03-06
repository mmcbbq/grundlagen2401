<?php
function plus($n)
{
    if ($n == 1){
        return 1;
    }
    return $n + plus($n -1);
}

//plus(3) -> 3 +2 + 1 = 6
//print $a = plus(100);

# plus(4) -> 4 + plus(3) beim return wird die funktion plus mit einem veraenderten Argument aufgerufen
# plus(3) -> 3 + plus(2) das Argument geht wird immer kleiner
# plus(2) -> 2 + plus(1) wenn es dann bei 1 angekommen ist
# plus(1)  1 stop es sich selbst aufzurufen und return nur eine 1
# nun koennen  von hinten nach vorne die return values eingesetzt werden

# plus(1) = 1
# plus(2) -> 2 + plus(1) = 2 + 1
# plus(3) -> 3 + plus(2) = 3 + 2 + 1
# plus(4) -> 4 + plus(3) = 4 + 3 + 2 + 1
# der Funktionsaufruf plus 4 return dann  4 + 3 + 2 + 1 = 10


# Schreibe eine rekursive Funktion power(x, n), die die Potenz x hoch n berechnet.

$x = 5;
$n = 2;
$e = 5 ** 2;# -> 5 x 5
// 5 ** 5 -> 5x5x5x5x5

function my_pow(int $x, int $n = 2 )
{
    if ($n == 1){
        return $x;
    }
    return $x * my_pow($x,$n -1);
}
print my_pow(5);
// my_pow(5,3) -> return 5 * 5 * 5
// my_pow(5, 2) -> return 5 * 5
// my_pow(5,1)  -> return 5



