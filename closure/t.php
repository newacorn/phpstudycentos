<?php
namespace A;
class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
    public static $car = 'static';
    var $b =99;

}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;

$bar= 'bar';

//echo $obj->{$bar[0]} ;
echo Foo::$car[0];


class SimpleClass
{
    // 错误的属性声明
    public $var1 = 'hello ' . 'world';
    public $var2 = <<<EOD
hello world
EOD;
    public $var3 = 1+2;
   // public $var4 = self::myStaticMethod();
  //  public $var5 = $myVar;

    // 正确的属性声明
  //  public $var6 = myConstant;
    public $var7 = array(true, false);

    //在 PHP 5.3.0 及之后，下面的声明也正确
    public $var8 = <<<'EOD'
hello world
EOD;

    function  dog(){
        $a = 'self';
        return new $a;
    }
}

$c = new SimpleClass();
echo $c->var8;

const A = array(1,2,3) + array(1,3,4);

var_dump(A);


//$c->dog();




spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new \Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (\Exception $e) {
    echo $e->getMessage(), "\n";
}


try{

   // echo $a;
//    throw  new ErrorException('sdfsd');
}catch (ErrorException $e){


}

class CC{
private $a = 1;
   private  function __construct()
   {
   }
}

class BB extends CC{
    private $a =2;
    public  $name;
function __construct()
{
}
function __destruct()
{
    // TODO: Implement __destruct() method.
    var_dump($this->name);

    echo `pwd`;
    try {
        throw new \Exception('eixting');
    }catch(\Exception $e){

    }


}


    /*    function BB(){

    var_dump("fafsfsd");
        }*/
}

$obj1 = new BB;
$obj1->name='obj1';
$obj2 = new BB;
$obj2->name='obj2';


