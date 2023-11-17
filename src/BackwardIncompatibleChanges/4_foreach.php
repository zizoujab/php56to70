<?php
/**
 * foreach by-value operates on a copy of the array
 * When used in the default by-value mode, foreach will now operate on a copy of the array being iterated rather than the array itself.
 * This means that changes to the array made during iteration will not affect the values that are iterated.
 */


$array  = [0, 1, 2];

var_dump(current($array));
foreach ($array as &$value) {
    var_dump(current($array));
}


//// foreach by-reference has improved iteration behaviour
//// When iterating by-reference, foreach will now do a better job of tracking changes to the array made during iteration. For example,
//// appending to an array while iterating will now result in the appended values being iterated over as well:
//

$array = [0];
print_r($array);
foreach ($array as &$value) {
    echo $value , PHP_EOL;
    $array[1] =  1;
}

print_r($array);