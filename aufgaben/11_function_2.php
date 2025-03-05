<?php
# Schreibe eine Funktion multiplikation.
# Sie soll 2 int parameter haben.
#Wenn man nur einen Parameter uebergibt soll dieser mit 2 multipliziert werden
# wenn man 2 Paramter uebergibt sollen diese miteinander multipliziert werden.



# Schreibe eine Funktion circle_area.
# Sie soll die Flaeche eines Kreises berechnen.
# Es soll moeglich sein den Radius oder den Durchmesser zu uebergeben.



# Schreibe eine Funktion chess_board
# param 1:string white_field
# param 2:string black_field
# param 3: int width
# param 4: int length
# Es soll ein Schachbrettmuster ausgegeben werden

# white_field = "a"
# black_field = "b"
# width = 3
# length = 4

# ausgabe

# a b a
# b a b
# a b a
# b a b

#wenn nichts uebergeben wird soll folgendes ausgegeben werden
# OXOXOXOX
# XOXOXOXO
# OXOXOXOX
# XOXOXOXO
# OXOXOXOX
# XOXOXOXO
# OXOXOXOX
# XOXOXOXO

$small = [
    [
        "name" => "Melanie Reilly",
        "email" => "jacksonlopez@example.com",
        "anzahl" => 40
    ],
    [
        "name" => "Gregory Russell",
        "email" => "swilliams@example.net",
        "anzahl" => 8
    ],
    [
        "name" => "Aaron Ross",
        "email" => "kevincline@example.org",
        "anzahl" => 99
    ],
    [
        "name" => "Meredith Coleman",
        "email" => "qvargas@example.com",
        "anzahl" => 60
    ],
    [
        "name" => "Michael Salazar",
        "email" => "patriciasmith@example.net",
        "anzahl" => 12
    ],
    [
        "name" => "Patricia Davis",
        "email" => "hernandezlindsay@example.net",
        "anzahl" => 4
    ],
    [
        "name" => "Albert Smith",
        "email" => "andrea66@example.com",
        "anzahl" => 13
    ],
    [
        "name" => "James Young",
        "email" => "hphillips@example.com",
        "anzahl" => 82
    ],
    [
        "name" => "Jennifer Mahoney",
        "email" => "natashabaxter@example.net",
        "anzahl" => 87
    ],
    [
        "name" => "John Smith",
        "email" => "cherylhoward@example.org",
        "anzahl" => 87
    ]];

# Schreibe Funktionen

# lle Funktionen haben ein Parameter costumers das ein verschachteltes array ist. siehe small

# best_costumer(array $costumers) return ein array mit dem costumer mit den höchste anzahl
# worst_costumer(array $costumers) return ein array mit dem costumer mit den niedrigsten anzahl
# change_email(array $costumers) return ein array das die emails der use aendert.
# aus [
//          "name" => "John Smith",
//        "email" => "cherylhoward@example.org",
//        "anzahl" => 87
//    ]
#wird
//[
//          "name" => "John Smith",
//        "email" => "j.smith@bbq.de",
//        "anzahl" => 87
//    ]

