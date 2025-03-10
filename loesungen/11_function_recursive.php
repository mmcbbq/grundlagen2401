<?php
// Schreibe eine rekursive function die die Fakultät eines int berechnet
//6! == 1 * 2 * 3 * 4 * 5 * 6


# Schreibe eine rekursive Funktion, die Summe aller Zahlen in einer gegebenen Liste berechnet

$numbers = [5,3,6,7];
function my_sum(array $list):int
{
    if (count($list) == 1){
        return$list[0];
    } else{
        return
        $list[0] + my_sum(array_slice($list,1));
    }
}
print my_sum($numbers);
# Schreibe eine rekursive Funktion reverse_string(string $s), die eine Zeichenkette s umkehrt.


function reverse_string(string $str):string
{
    if (strlen($str) == 1){
        return $str;
    }
    return $str[strlen($str)-1] . reverse_string(substr($str,0,-1));

}
print reverse_string("hallo");

# Schreibe eine rekursive Funktion is_palindrome(s):bool, die überprüft, ob eine Zeichenkette s ein Palindrom ist.
function is_palindrom(string $s):bool
{
    if (strlen($s)<= 1){
        return true;
    }
    if($s[0] !== $s[strlen($s) -1]){
        return false;
    }
    return true and is_palindrom(substr($s,1,-1));
}
var_dump(is_palindrom('reliefpfeiler'));
# Schreibe eine rekursive Funktion count_consonants(s):int, die die Anzahl der Konsonanten in einer Zeichenkette s zählt.
function count_consonaten(string $str):int
{
    if (strlen($str)== 0){
        return 0;
    }
    if(!in_array($str[0],['a','e','i','o','u'])){
        return 1+ count_consonaten(substr($str,1));

    } else{
        return  count_consonaten(substr($str,1));
    }
 }

 print count_consonaten("halll1111aeiouo");


