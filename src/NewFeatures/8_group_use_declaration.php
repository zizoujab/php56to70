<?php
// Pre PHP 7 code

use some\namespacex\ClassA;
use some\namespacex\ClassB;
use some\namespacex\ClassC as C;

use function some\namespacex\fn_a;
use function some\namespacex\fn_b;
use function some\namespacex\fn_c;

use const some\namespacex\ConstA;
use const some\namespacex\ConstB;
use const some\namespacex\ConstC;

// PHP 7+ code
//use some\namespacex\{ClassA, ClassB, ClassC as C};
//use function some\namespacex\{fn_a, fn_b, fn_c};
//use const some\namespacex\{ConstA, ConstB, ConstC};