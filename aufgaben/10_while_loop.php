<?php
# Zahlen addieren:
# Schreibe eine While-Schleife,
# die die Summe von Zahlen von 1 bis zu 100
# eingegebener Zahl berechnet.

$summe = 0;
$zahl = 1;

while ($zahl < 101) {
    $summe += $zahl;
    $zahl++;
}
print $summe;

$suche = "Bill";
$user = ['Donald', "George", "Ronald", "Bill"];



#Schreibe eine while loop die nach einem Namen in dem user array sucht.
# Wenn der Name gefunden wird soll die Schleife stoppen und den index ausgeben.
# Wen der Name nicht gefunden wird PRINTE "nicht gefunden"


$liste = [1112,27, 29, 7, 76, 56,1117];

$min_wert = $liste[0];
$max_wert = $liste[0];
$i = 0;
$count = count($liste);

while ($i < $count -1){
    $i ++;
    if ($min_wert > $liste[$i]){
        $min_wert = $liste[$i];
    }
    if ($max_wert < $liste[$i]){
        $max_wert = $liste[$i];
    }
}
echo "\n",$min_wert, "\n", $max_wert;



#finde mit einer While Schliefe  in der liste den min und den max Wert