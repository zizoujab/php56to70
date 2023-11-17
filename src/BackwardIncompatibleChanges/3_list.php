<?php
// the order of assigning is not good
list($a[], $a[], $a[]) = [1, 2, 3];
print_r($a);

// list()=[];

$string = "hello";
list($h) = $string;
 list($h) = str_split($string);
var_dump($h);
