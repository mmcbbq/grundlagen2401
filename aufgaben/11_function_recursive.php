<?php
// Schreibe eine rekursive function die die Fakultät eines int berechnet
//6! == 1 * 2 * 3 * 4 * 5 * 6
function fak($n)
{
    if ($n == 1) {
        return 1;
    }
    return $n * fak($n - 1);
}

print fak(64);
//fak(3)
// return  3 * fak(2)  -> 3 * 2 * 1
// return  2 * fak(1)  -> 2 * 1
// return  1
# Schreibe eine rekursive Funktion, die Summe aller Zahlen in einer gegebenen Liste berechnet

$numbers = [5, 3, 6, 7];
print "\n\n\n\n";
function my_sum(array $array): int|float
{
    if (count($array) <= 1) {
        return $array[0];
    }
    $raus = array_shift($array);
    return $raus + my_sum($array);
}

print my_sum($numbers);
# Schreibe eine rekursive Funktion reverse_string(string $s), die eine Zeichenkette s umkehrt.

//peter-> retep
function reverse_string(string $s): string
{
    if (strlen($s) <= 1) {
        return $s;
    }
    $rest = substr($s, 0, -1);
    return $s[strlen($s) - 1] . reverse_string($rest);
}

print "\n";
print reverse_string("peter pan");
# Schreibe eine rekursive Funktion is_palindrome(s):bool, die überprüft, ob eine Zeichenkette s ein Palindrom ist.

function is_palindrom(string $s): bool
{

    if (strlen($s) <=1){
        return true;
    }

    $rest = substr($s,1,-1);
    if ($s[0] === $s[-1]) {
        return true and is_palindrom($rest);
    } else {
        return false;
    }
}

print "\n\n\n\n";
//var_dump(is_palindrom("otto"));
var_dump(is_palindrom('ottto'));
# Schreibe eine rekursive Funktion count_consonants(s):int, die die Anzahl der Konsonanten in einer Zeichenkette s zählt.

function count_consonants(string $s):int
{
    $s = strtolower($s);
    $v = ['a','e','i','o','u'];

    if (strlen($s) == 0){
        return 0;
    }
    $rest = substr($s,1);
    if (in_array($s[0],$v) or !ctype_alpha($s[0])){
        return 0 + count_consonants($rest);
    } else {
        return 1 + count_consonants($rest);
    }
}

print "\n\n\n\n";
print count_consonants("hA123llo");

