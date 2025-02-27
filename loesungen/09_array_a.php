<?php
# Erstelle ein leeres assoziatives array namens my_dict.
$my_dict = [];

# Fülle das Assoziative array my_dict mit drei Schlüssel-Wert-Paaren:
# "Apfel" mit dem Wert 3, "Banane" mit dem Wert 2 und "Orange" mit dem Wert 5.
$my_dict['Apfel'] = 3;
$my_dict['Banane'] = 2;
$my_dict['Orange'] = 5;

# Drucke den Wert für den Schlüssel "Banane" aus.

print $my_dict['Banane'];

# Überprüfe, ob der Schlüssel "Traube" im assoziatives array my_dict vorhanden ist.
var_dump(array_key_exists('Traube',$my_dict));


# Füge dem Assoziative array my_dict einen neuen Eintrag hinzu: "Traube" mit dem Wert 4.
$my_dict['Traube'] = 4;

# Aktualisiere den Wert für den Schlüssel "Apfel" auf 6.

$my_dict['Apfel'] = 6;


# Lösche den Eintrag für den Schlüssel "Orange" aus dem Dictionary.
unset($my_dict['Orange']);


# Drucke alle Schlüssel in my_dict aus.
var_dump(array_keys($my_dict));

# Drucke alle Werte in my_dict aus.
var_dump(array_values($my_dict));
# Drucke alle Schlüssel-Wert-Paare in my_dict aus
print_r($my_dict);





