<?php

$global = "global";


function local()
{
    global $global_aus_local;
    global $global;
    print $global;
    $global_aus_local = "44";
}

local();

print $global_aus_local;


function mystatic()
{
    static $x = 0;
    print $x."\n";
    $x++;
}
print "\n";
print "\n";
print "\n";
print "\n";
print "\n";
mystatic();
print "\n";


