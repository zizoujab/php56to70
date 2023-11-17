<?php



function inc($x)
{
    $x++;
    echo "x : " . func_get_arg(0) . "\n";
    // same for : func_get_args, and debug_backtrace();
    return $x;
}

inc(0);


function foo($a, $b, $unused, $unused)
{
    //
}
