<?php
error_reporting(E_ALL);
// 1. errors and exception handling :
// set_exception_handler() is no longer guaranteed to receive Exception objects

function handler(Throwable $e) {
    //var_dump($e);
    echo "Got an error" , PHP_EOL;
}

set_exception_handler('handler');
var_dump( 0%0);





