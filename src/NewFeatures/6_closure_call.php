<?php
class A {
    private $x = 1;
}
$getX = function() { return $this->x ;};

// php < 7
$getXCallback = $getX->bindTo(new A(), 'A');
echo $getXCallback() . "\n";

// php > 7
echo $getX->call(new A()) . "\n";