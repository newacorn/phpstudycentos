<?php
class Foo {
    public function bar() {
        static $anonymous = null;
        if ($anonymous === null) {
            // Expression is not allowed as static initializer workaround
            $anonymous = (function (self $obj) {
                return $obj;
            })->bindTo(null,'static');
        }
        return $anonymous;
    }
}

$a = new Foo();
$b = new Foo();
var_dump($a->bar()($a) === $a); // True
//var_dump($b->bar()() === $a); // Also true

trait M{
    function dog(){
        var_dump(__CLASS__);
   // $c =    debug_backtrace();
    //print_r($c);
    }
}
class A{
    use M;


}

$c = new A();
$c->dog();
$m = $a->bar()->bindTo(null,'A');

var_dump($m($c)==$c);


$c = [1,2,3];
$str = var_export($c,true);

var_export($str);
var_dump($str);
$m = 'array (
  0 => 1,
  1 => 2,
  2 => 3,
)';

var_dump($m);

function cat(&$a){


}
$c = 9;

cat($c);
//cat(&$c);

function pp($c,$d){

var_dump(func_get_args());
}
pp(1,2,3,4);

class Fooa
{
    static $variable = 'static property';
    static function Variable()
    {
        echo 'Method Variable called';
    }
}
$variable = "Variable";
echo Fooa::$variable; // This prints 'static property'. It does need a $variable in this scope.
$variable = "Variable";
Fooa::$variable();  // This calls $foo->Variable() reading $variable in this scope.

array('Fooa','Variable')(); //Arrays, which are valid callables, are allowed as variable functions.
'Fooa::Variable'();

$c = 'Fooa';

new $c;

$a = 5;
$c = &$a;
unset($a);
var_dump($c);

class Test
{
    static public function getNew()
    {
        var_dump(get_called_class());
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
