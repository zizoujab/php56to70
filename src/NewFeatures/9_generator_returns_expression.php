<?php

$gen = (function(){
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $value){
    echo $value, PHP_EOL;
    // echo $gen->getReturn();
}

echo $gen->getReturn() , PHP_EOL;

