<?php

function foo(){
    $c = 8;
    static $int = 0;          // correct
    static $int = 1+2;        // wrong  (as it is an expression)
//    static $int = $c;
 //   static $int = sqrt(121);  // wrong  (as it is an expression too)

    $int++;
    echo $int;
}
function test_global_ref() {
    global $obj;
    $obj = new stdclass;
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);


function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign a reference to the static variable
        $obj = new stdclass;
        $obj->property=0;
    }
    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign the object to the static variable
        $obj = new stdclass;
        $obj->property=0;
    }
    $obj->property++;
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo "\n";
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();



class Foo {
    public function bar() {
        static $anonymous = null;
        if ($anonymous === null) {
            // Expression is not allowed as static initializer workaround
            $anonymous = (function () {
                return $this;
            });
          // $anonymous=  $anonymous->bindTo(null,'static');
        }
        var_dump($anonymous);
        return $anonymous;
    }
}

$a = new Foo();
$b = new Foo();

var_dump($a->bar()() === $a); // True
var_dump($b->bar()->bindTo($b,'static')() === $a); // Also true


$cc = static function(){

    return 3;
};

var_dump($cc);

function cat(){
   static $ab;
   if(!isset($ab))
     $ab = function(){

       return $this;

    };
   return $ab;
}

var_dump(cat());
var_dump(cat());

class AM{


}

$ac = new AM();
$ad = new AM();
$pp = cat()->bindTo($ac,'AM');
//$qq = cat()->bindTo($ad,'AM');
$qq= cat();

var_dump($pp()===$ac,$qq()===$ad);