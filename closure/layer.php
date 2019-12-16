<?php

function dog(){

//cat();
}
function cat(){
var_dump("fsfs");
}
dog( );
trait traita{
public  $a =3;
   public function dog(){
var_dump("traita dog");

   }
}
trait traitb{

    public function dog(){

        var_dump(__LINE__);
    }
}

class A{
    public $a = 3;
    use traita,traitb{
        traita::dog insteadof traitb;
         traita::dog  as public doga;

    }

    private $p =90;

    function __isset($name)
    {
        var_dump(__LINE__);
        return isset($this->$name);
        // TODO: Implement __isset() method.
    }
    function __get($name)
    {
        var_dump(__LINE__);
        // TODO: Implement __get() method.
        return $this->$name;
    }

    function  __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
        $trace = debug_backtrace();
       // var_dump($trace);
        var_export($trace);
    }

    function __unset($name)
    {
        // TODO: Implement __unset() method.
        unset($this->$name);
    }
}
$Obj = new A;

$Obj->p=100;

var_dump($Obj->p);
unset($Obj->p);
var_dump(empty($Obj->p));




(new A())->dog();

$cc = new class extends A{

} ;
$m = null;

var_dump(isset($m));
//var_dump(defined($m));


echo implode(',',[1]);
class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind() {
        echo "rewinding\n";
        reset($this->var);
    }

    public function current() {
        $var = current($this->var);
        echo "current: $var\n";
        return $var;
    }

    public function key() {
        $var = key($this->var);
        echo "key: $var\n";
        return $var;
    }

    public function next() {
        $var = next($this->var);
        echo "next: $var\n";
        return $var;
    }

    public function valid() {
        $var = $this->current() !== false;
        echo "valid: {$var}\n";
        return $var;
    }


/*    public static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
        var_export($an_array);
    }*/
}
$values = array(1,2,3);
$it = new MyIterator($values);

foreach ($it as $a => $b) {
    //print "$a: $b\n";
}

var_export($it);
var_export(MyIterator);