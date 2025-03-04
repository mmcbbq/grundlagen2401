<?php
//Schreibe eine Funktion flaecheRechteck
//Sie soll die Flache eines Rechteckes zurückgeben
function flaecheRecht($c, $b){
    $a = $c * $b;
//    print "Flaeche ist $a";
    return $a;

}
//Schreibe eine Funktion flaecheKreisRadius
//Sie soll die Flache eines Kreises mit dem Radius berechnen und zurückgeben
function flaecheKreisRadius($radius)
{
    $a = $radius ** 2 * pi();
//    print "Kreisflaeche $a";
    return $a;
}
//Schreibe eine Funktion flaecheKreisRadius
//Sie soll die Flache eines Kreises mit dem Radius berechnen und zurückgeben
function flaecheKreisDurch($durch)
{
    $a = ($durch/2) ** 2 * pi();
//    print "Kreisflaeche $a";
    return $a;
}
//Schreibe eine Funktion flaecheRechtwinkDreieck
//Sie soll die Flache eines Rechtwinkligen Dreieck  zurückgeben
function flaecheRechtwinkDreieck($a, $b){
    $a = $a * $b /2;
//    print "Flaeche ist $a";
    return $a;
}
//Schreibe eine Funktion flaecheGleichDreieck
//Sie soll die Flache eines Gleichseitiges Dreieck zurückgeben
function flaecheGleichDreieck($s)
{
    $a = (sqrt(3)) / 4 * $s ** 2;
//    print "Flaeche $a";
    return $a;
}

// Schreibe eine Funktion kosten_pro_flaeche.
// parameter 1 flaeche: die zu streichende Flaeche
// paramerter 2 kosten_pro_m: die kosten der Farbe pro m^2
function kosten_pro_flaeche($flaeche, $kosten_pro_m)
{
    $preis = $flaeche * $kosten_pro_m;
    return $preis;
}

//Berechen die Kosten nach dem Bild
// Kosten der Farbe 4 Euro pro m^2

$wand = flaecheRecht(3,5);
$fenster = flaecheRecht(1.5,1.2);
$tuer = flaecheRecht(0.8,2.3);
$rundefenster = flaecheKreisDurch(1.4);
$hundetuer = flaecheRecht(.3,.5);
//
//var_dump($wand, $fenster, $tuer, $rundefenster, $hundetuer);
$flaechestreichen = $wand - $fenster - $tuer - $rundefenster - $hundetuer;

kosten_pro_flaeche($flaechestreichen,4);
$farbkosten = kosten_pro_flaeche(flaecheRecht(3,5) - flaecheRecht(1.5,1.2) - flaecheRecht(.8,2.3) - flaecheKreisDurch(1.4) - flaecheRecht(.3,.5) ,4);

//flaecheGleichDreieck(5);

// Berechne die Kosten nach dem mit und mmit dem Farben_kosten im array

$farben_kosten = ['rot'=> 8.50,'gelb'=>7.80,'blau'=> 12.85];


$blaue_wand = flaecheRecht(6,8);

$fenster_link = flaecheRecht(2.3,2.3);
$fenster_rechts = flaecheRecht(1.7,1.3);
$tuer = flaecheRecht(2.3,.75);
$fenster_rund = flaecheKreisDurch(.7);

$rote_ecke_1 = flaecheRechtwinkDreieck(1.5,1.2);
$rote_ecke_2 = flaecheRechtwinkDreieck(1.5,1.2);

$gelbe_ecke_1 = flaecheGleichDreieck(.7);
$gelbe_ecke_2 = flaecheGleichDreieck(.7);
$gelbe_ecke_3 = flaecheGleichDreieck(.7);
$gelbe_ecke_4 = flaecheGleichDreieck(.7);

$flaeche_rot = $rote_ecke_1 + $rote_ecke_2;

$flaeche_gelb = $gelbe_ecke_1 + $gelbe_ecke_2 + $gelbe_ecke_3 + $gelbe_ecke_4;

$flaeche_aussparung = $fenster_link + $fenster_rund + $tuer + $fenster_rechts;

$flaeche_blau = $blaue_wand - $flaeche_rot - $flaeche_gelb - $flaeche_aussparung;





$kosten_rot = kosten_pro_flaeche($flaeche_rot,$farben_kosten['rot']);

$kosten_gelb = kosten_pro_flaeche($flaeche_gelb, $farben_kosten['gelb']);

$kosten_blau = kosten_pro_flaeche($flaeche_blau, $farben_kosten['blau']);

$kosten_gesamt = $kosten_rot + $kosten_gelb + $kosten_blau;

print "rote Farbe $kosten_rot\n";
print "gelb Farbe $kosten_gelb\n";
print "blau Farbe $kosten_blau\n";
print $kosten_gesamt;

$kosten_gesamt = kosten_pro_flaeche(
    flaecheRecht(6,8)
    - flaecheRechtwinkDreieck(1.5,1.2)
    -flaecheRechtwinkDreieck(1.5,1.2)
    -flaecheGleichDreieck(.7)
    -flaecheGleichDreieck(.7)
    -flaecheGleichDreieck(.7)
    -flaecheGleichDreieck(.7)
    -flaecheRecht(2.3,2.3)
    -flaecheRecht(1.7,1.3)
    -flaecheRecht(2.3,.75)
    -flaecheKreisDurch(.7),
    $farben_kosten['blau']
) + kosten_pro_flaeche(
        flaecheGleichDreieck(.7)
        +flaecheGleichDreieck(.7)
        +flaecheGleichDreieck(.7)
        +flaecheGleichDreieck(.7),
        $farben_kosten['gelb']
    ) + kosten_pro_flaeche(
        flaecheRechtwinkDreieck(1.5,1.2)
        +flaecheRechtwinkDreieck(1.5,1.2),
        $farben_kosten['rot']
    );
print "\n";
print $kosten_gesamt;









