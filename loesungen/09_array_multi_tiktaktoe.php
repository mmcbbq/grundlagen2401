<?php
# Erstelle eine list tic
$tic = [];
# Füge tic eine Liste mit den werten 'l','l','l' hinzu
$tic[]=  ['l','l','l'];
$tic[]=  ['k','k','k'];
$tic[]=  ['b','b','b'];
# Füge tic eine 2. liste mir den werten 'k','k','k' hinzu
# Füge tic eine 3. liste mir den werten 'b','b','b' hinzu
# Printe jede unterliste in einer Zeile aus
# ['l', 'l', 'l']
# ['k', 'k', 'k']
# ['b', 'b', 'b']
# ändere die liste wie folgt ab
# ['x', 'l', 'l']
# ['k', 'x', 'k']
# ['b', 'b', 'x']

$tic[0][0] = 'x';
$tic[1][1] = 'x';
$tic[2][2] = 'x';
# ändere die liste wie folgt ab
# ['x', 'o', 'o']
# ['x', 'x', 'o']
# ['o', 'x', 'o']

$tic[0][1] = 'o';
$tic[0][2] = 'o';

$tic[1][0] = 'x';
$tic[1][2] = 'o';

$tic[2][0] = 'o';
$tic[2][1] = 'x';
$tic[2][2] = 'o';


# ändere die liste wie folgt ab
# ['o', 'o', 'o']
# ['x', 'x', 'o']
# ['o', 'x', 'o']

$tic[0][0] = 'o';





# schriebe ein Programm das 2 Zahlen zwischen 1 und 3 und einem Buchstaben vom user fordert
# Anschliessend soll der Wert mit der Pos der zwei Zahlen mit den Buchstaben überschrieben werden
# und die Liste wie in der vorherigen Aufgabe ausgegeben werden
$input_1 = 2;
$input_2 = 3;
$input_3 = 'p';

$tic[$input_1 - 1][$input_2-1] = $input_3;
var_dump($tic);

# 1['o', 'm', 'o']
# 2['x', 'x', 'o']
# 3['o', 'x', 'o']
#    1    2    3
# Beispiel Zahl1 = 3 Zahl2 = 2 Buchstabe = p
# 1['o', 'o', 'o']
# 2['x', 'x', 'p']
# 3['o', 'x', 'o']

# Zähle alle "o" in der mittleren Liste index 1
//print_r(array_count_values($tic[1])['o']);
#Schreib eine If anweisung die 'Sieg' ausgibt wenn das Zeiche auf pos 1.1 das selbe ist wie auf pos 2.2 und 3.3
$tic[1][1] = 'o';
if($tic[0][0] == $tic[1][1] and $tic[0][0] == $tic[2][2]){
    print('Sieg');
} else {
    print 'Kein Sieg';
}
