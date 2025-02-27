<?php

$m_array = ['Eins', 'zwei', 'Drei',
    ['vier', 'fuenf',
        ['name' => 'Joe', 'email' => 'joe@banana.com',
            'berater'=>['Facebook','Google','Ford']], 'sechs']];

$zahl = 3;
$m_array[3][2]['berater'][1] = 'bing';
var_dump($m_array[$zahl][2]['berater'][1]);












//$usa = [
//    [
//        [
//            ["George Washington", "Thomas Jefferson", "Abraham Lincoln"],
//            ["Theodore Roosevelt", "Franklin D. Roosevelt", "Harry S. Truman"]
//        ],
//        [
//            ["Dwight D. Eisenhower", "John F. Kennedy", "Lyndon B. Johnson"],
//            ["Richard Nixon", "Gerald Ford", "Jimmy Carter"]
//        ]
//    ],
//    [
//        [
//            ["Ronald Reagan", "George H. W. Bush", "Bill Clinton"],
//            ["George W. Bush", "Barack Obama", "Donald Trump"]
//        ],
//        [
//            ["Joe Biden", "Andrew Jackson", "Woodrow Wilson"],
//            ["Franklin Pierce", "James Buchanan", "John Adams"]
//        ]
//    ]
//];