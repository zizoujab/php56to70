<?php
error_reporting(E_ALL);
class A {
    public function test() { var_dump($this);}
}

class B {
    public function callNonStaticFunctionOfA(){ A::test();}
}

(new B())->callNonStaticFunctionOfA();



