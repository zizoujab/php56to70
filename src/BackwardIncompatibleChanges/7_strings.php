<?php

// Hexadecimal strings are no longer considered numeric
var_dump("0x123" == "291");
var_dump(is_numeric("0x123"));
var_dump("0xe" + "0x2");
var_dump(substr("foo", "0x1"));


$str = "0xf";
$int = filter_var($str, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX);
if (false === $int){
    throw new Exception("Invalid Integer !");
}
var_dump($int);