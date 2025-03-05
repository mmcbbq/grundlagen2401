<?php declare(strict_types=1);


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


function sag_name($name = "Joe")
{
    print "\n".$name;
}

sag_name();
sag_name("Donald");


function sag_viele_namen(...$name)
{

    for ($i = 0; $i < count($name); $i++) {
        print "\n".$name[$i];

    }
}
print "\n";
sag_viele_namen("joe", 'donald',"ronald");





function datatype(int $int) :int
{
    return $int;
}
datatype(55);