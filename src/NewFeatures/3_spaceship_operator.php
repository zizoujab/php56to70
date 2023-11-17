<?php
// spaceship operator
// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

$things = [
    [
        'foo' => 5.5,
        'bar' => 'abc'
    ],
    [
        'foo' => 7.7,
        'bar' => 'xyz'
    ],
    [
        'foo' => 2.2,
        'bar' => 'efg'
    ]
];
// Sort $things by 'foo' property, ascending
usort($things, function ($a, $b) {
    return $a['foo'] <=> $b['foo'];
});
print_r($things);
