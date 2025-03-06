<?php
$array = ["Tim", 'Bob', 'Jim'];
function change_array($cha_array)
{
    $cha_array[0] = "Donald";
    print "Change in der Function";
    print '______________';
    print_r($cha_array);
}

print "Vorher by value";
print_r($array);
print "-------------";
print "-------------";
print "-------------";
change_array($array);
// $cha_array = $array
//cha_array[0] = 'Donald'

print 'Nachher by value';
print_r($array);
print ("\n");
print ("\n");
print ("\n");
print ("\n");
print ("\n");
function change_array_ref(&$cha_array) // D
{
    $cha_array[0] = "Donald";
    print "Change in der Function";
    print '______________';


    print_r($cha_array);

}

print "Vorher by ref";
print_r($array);
print "-------------";
print "-------------";
print "-------------";
change_array($array);
// $cha_array = $array
//cha_array[0] = 'Donald'
print 'Nachher by ref';
print_r($array);