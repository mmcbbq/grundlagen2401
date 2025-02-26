<?php
# Erstellen Sie eine array von 5 Städten, die Sie besuchen möchten.
# Fügen Sie dann eine weitere Stadt hinzu und entfernen Sie die dritte Stadt aus der Liste.
# Schließlich geben Sie die Liste der verbleibenden Städte aus.
$city = ['Berlin','Wien', 'Tokyo', 'Rom','Porto'];
$city[] = 'Buch';
array_splice($city,2,1);
//var_dump($city);
# Erstelle eine array super_liste mit folgenden Items: 20, 50.5, 'Hallo', True, 'Löschen', 'auf Wiedersehen'
$super_liste = [20, 50.5, 'Hallo', true, 'Löschen', 'auf Wiedersehen'];

# Ändere den Wert des ersten Elementes zu 95
$super_liste[0] = 95;
# Kopiere den Wert des 4 Elements auf den 2 index
$super_liste[2] = $super_liste[3];
# Ändere das 4 Element zu False
$super_liste[3] = false;
# Füge das Element "999" an der letzten Stelle der Liste an
$super_liste[] = '999';
# Füge das Element "Nummer 5" an der 5 Stelle ein
array_splice($super_liste,4,0,'Nummer 5');
# tauche das Element mit dem Index 0 und das Element mit dem Index 5
$zw = $super_liste[5];
$super_liste[5] = $super_liste[0];
$super_liste[0] = $zw;

# Schreibe eine If anweisung die das Element 'bin da' löscht, wenn es vorhanden ist.
# Wenn das Element nicht vorhanden ist, soll es an letzter Stelle hinzugefügt werden




$super_liste = [20, 50.5, 'Hallo', true  ,'Löschen', 'auf Wiedersehen',];
$check = array_search('bin da', $super_liste, true);


if ($check === false ){
    $super_liste[] = 'bin da';
} else{
    array_splice($super_liste,$check,1);
}



# copy die array in die Variable list_copy
$copy = $super_liste;
# Leere die Originalarray
$super_liste = [];
# Füge die letzten 3 Elemente der list_copy an die super_liste an.
$super_liste = array_merge($super_liste, array_splice($copy,-3,3));

var_dump($super_liste);









