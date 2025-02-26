<?php


$my_array = array('Bill', 123, 45.008, true);

$my_array2 = ['Tom', 456, 42.24, 'false'];

//anzahl der Elemente

count($my_array);


// Ein Element am Ende Anfuegen
$my_array2[] = "mein neues Element";
array_push($my_array2, "array_push");


//Change Element
$my_array2[0] = "George";

//Loescht das Element
array_pop($my_array2);
// Loescht ein Element mit ueber den Index 'offset'
array_splice($my_array2, 1, 1);

//oder mit unset
unset($my_array2[1]);
// um leerstellen im Index zu vermeiden array_values
$my_array2 = array_values($my_array2);

// tauschen

$zwischenwert = $my_array2[1];
$my_array2[1] = $my_array2[2];
$my_array2[2] = $zwischenwert;

$my_array2 = ['Tom', 456, 42.24, 'false'];
$pos = 1;
$len = 2; //von wo & wie viele Elemente
array_splice($my_array2, $pos, $len, array_reverse(array_slice($my_array2, $pos, $len)));
print '---------Tausch------------';
var_dump($my_array2);
print '-----------------------------';
// arrays anfuegen
$my_array2 = array_merge($my_array, $my_array2);

// Copy by value

$original_list = [1, 2, 3];
$copy = $original_list;
var_dump($original_list);
print "--------copy------------";
var_dump($copy);
// Copy by ref  mit dem '&'

$original_list = [1, 'Barack', 3];
$copy = &$original_list;
$copy[0] = "1000";
var_dump($original_list);
print "--------copy------------";
var_dump($copy);
print array_search('Barack',$copy);