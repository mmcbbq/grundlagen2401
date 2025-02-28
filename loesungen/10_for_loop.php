<?php

# Schreib eine Schleife die folgendes Muster ausgibt
# *
# **
# ***
# ****
# *****

for ($i = 1; $i <= 5; $i++) {
    print str_repeat('*', $i);
    print "\n";
}


# Schreib eine Schleife die folgendes Muster ausgibt
# *****
# ****
# ***
# **
# *
for ($j = 5; $j >= 1; $j--) {
    print str_repeat('*', $j);
    print "\n";
}

# Schreib eine Schleife, die folgendes Muster ausgibt
# 1
# 12
# 123
# 1234
# 12345

for ($zeilen = 1; $zeilen <= 5; $zeilen++) {
    for ($spalte = 1; $spalte <= $zeilen; $spalte++) {
        print $spalte;
    }
    print "\n";
}


# Schreib eine Schleife, die folgendes Muster ausgibt
# 5
# 45
# 345
# 2345
# 12345

for ($k = 5; $k >= 1; $k--) {
    for ($l = $k; $l <= 5; $l++) {
        print $l;
    }
    print "\n";
}


# ### fizzbuzz
# Schreiben Sie ein Programm, das die Zahlen von 1 bis 100 ausgibt.
# Bei jeder Zahl, die durch 5 teilbar ist, soll "fizz" ausgegeben werden
# und bei jeder Zahl, die durch 7 teilbar ist,
# soll "buzz" ausgegeben werden.
# Wenn die Zahl sowohl durch 7 als auch durch 5 teilbar ist,
# soll "fizzbuzz" ausgegeben werden.
# Der Modulo-Operator ermittelt den Rest bei Division.
# Somit ist eine Teilbarkeit einfach dann erreicht,
# wenn die Modulo-Operation (%, MOD) den Rest 0 liefert.


for ($m = 1; $m <= 100; $m++) {
    if ($m % 5 == 0 and $m % 7 == 0) {
        print "fizzbuzz \n";
    } elseif ($m % 7 == 0) {
        print "buzz \n";
    } elseif ($m % 5 ==0) {
        print "fizz \n";
    } else {
        print $m;
        print "\n";
    }
}