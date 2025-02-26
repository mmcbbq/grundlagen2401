<?php
$asso_array = array('name'=> 'Bill','alter'=>30, 'stadt'=> 'Berlin');

$user = ['name'=> 'George', 'alter' => 55, 'stadt'=>'New York'];

$user['name'] = 'Donald';
$user['email'] = 'bob@bobson.de';

//array_pop($user);
//array_splice($user,1,1);
//
//unset($user['name']);




$keys = ['fname', 'lanme','id'];
$values  = ['Barack','Obama',1];

$new_array = array_combine($keys, $values);
var_dump($new_array);
