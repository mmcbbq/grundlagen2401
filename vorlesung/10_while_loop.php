<?php


//while (true){
//    print 'While';
//}
//$z = 0;
//while (true){
//    print "$z \n";
//    if ($z == 10){
//        break;
//    }
//    $z++;
//}

$k = 0;
while ($k < 10){
    $k++;
    if ($k == 5 ){

        continue;
    }
    print "$k \n";
}

$i = 0;

do{
    echo $i;
    $i++;
} while ($i < -2);