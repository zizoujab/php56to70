<?php

//$foo = [
//    'bar' => [
//        'baz' => 'fooBarBaz'
//    ]
//];
//
//$fooBarBaz = "php5";
//
//echo $foo['bar']['baz'] . "\n";
//echo $$foo['bar']['baz'] . "\n";
//PHP 7 equivalent :  ${$foo['bar']['baz']};
//echo $fooBarBaz;

$foo = 'x';
$x = [
    'bar' => [
        'baz' => 'fooBarBaz'
    ]
];
echo $$foo['bar']['baz']. "\n";
//// equivalent to ($$foo)['bar']['baz']
// equivalent to $x['bar']['baz']


