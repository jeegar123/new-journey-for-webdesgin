<?php
// in traits we can use like global function,no function should be same if multiple trails
trait myTrait{
    public function fun1()
    {
        echo "function one";
    }
    public function fun2()
    {
        echo "function two";
    }
}
trait myTrait2{
    public function fun4()
    {
        echo "function foure";
    }
    public function fun5()
    {
        echo "function five";
    }
}
class Test{
    // to use traits
    use myTrait,myTrait2;
}


$test=new Test();
$test->fun1();
$test->fun5();