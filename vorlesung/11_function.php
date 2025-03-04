<?php

function berechneQuadrat($seitelaenge)

{
    $a = $seitelaenge ** 2;
    print $a;
}
berechneQuadrat(5);

function halloWelt()
{
    print 'Hallo Welt';

}

halloWelt();



function say_hallo($fname, $lname, $email)
{
    print(" Hallo $fname $lname \n");
    print(" email: $email");

}
$name = "Bernd";

say_hallo('Bernd' ,'Berndson','Bernd@bbq.de');



