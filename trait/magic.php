<?php
class A
{

private $a1 = 4,$a2,$a3;
private $m =90;
public $d;

function __construct($a1,$a2,$a3)
{
    $this->a1= $a1;
    $this->a2 = $a2;
    $this->a3 = $a3;
}

    function __set($name, $value)
    {
        // TODO: Implement __set() method.

        var_dump("$name-$value");
        $this->$name = $value;
    }

    function __get($name)
    {
        var_dump($name);
        // TODO: Implement __get() method.
    }

    function __unset($name)
    {
        // TODO: Implement __unset() method.
    }
    function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    static function __set_state($array){


    }
    function getp(){

   var_dump($this->m);
   $this->getm();
    }

    private  function getm(){
   var_dump(get_called_class(),__LINE__);
}

}



class B extends A{
    static $sta;
private $m =9;
    private  function getm(){
        var_dump(get_called_class(),__LINE__);
    }
}


$obj = new B(1,2,3);

$obj->getp();
$c = 'B';
var_dump($obj instanceof $c);
$m = 44;
B::$sta = &$m;
$m = 55;
var_dump(B::$sta);