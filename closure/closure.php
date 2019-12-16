<?php
$example = function (&$a){

   var_dump($a++);
};

$a = 7;
$example($a);
var_dump($a);

class Foo
{
    function __construct()
    {
        $func =  (static function() {
            var_dump(__CLASS__);
            var_dump(get_called_class());
        })->bindTo(null,null);
      //  $func();
        return $func;
    }
};

$c1 = new Foo();
$c2 = $c1->__construct();
var_dump($c2);
$c2();
//var_dump($c2());
class A{

}
$c3 = $c2->bindTo(null,'A');
$c3();
var_dump($c3);





