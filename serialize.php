<?php
class A{
   public $a,$b,$c;
   private $d;

   function __construct($a,$b,$c)
   {
       $this->a =$a;
       $this->b= $b;
       $this->c =$c;
       var_dump(__LINE__);
   }

    function __sleep()
    {
        // TODO: Implement __sleep() method.
        return ['a','b'];
    }

    function __wakeup()
    {
        // TODO: Implement __wakeup() method.

        $this->d =100;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        var_dump(__LINE__);
    }

    /**
     * @return array
     */
  public  function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
        return ['a'=>4,'d'=>333];
    }
}

$obj = new A(1,2,3);

var_dump($obj);

$se = serialize($obj);
var_dump($se);
$M = unserialize($se);
var_dump($M);

var_dump($obj);


class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));

class Foo
{
    private $bar = 12222222222222222222222;

    public function get()
    {
        $x = clone $this;
        return $x->bar;
    }
}
// will NOT throw exception.
// Foo::$bar property is visible internally even if called as external on the clone
print (new Foo)->get();


class B extends Foo{


}
$c = 'B';
$d = 'Foo';
$obj = new Foo;

var_dump($obj instanceof $d);
var_dump($obj instanceof Foo);
var_dump($c instanceof Foo);

var_dump(is_a('dfdf', 'Foo',true));
var_dump($a);
