<?php
function staticreference(){

    static $var=0;
    $var ++;
    echo $var.PHP_EOL;
    $c = 100;
    $var = &$c;//此时$var 已经不再是静态变量的引用,$var已经是$c的引用
}
staticreference();
staticreference();
staticreference();
/*
 * 1
 * 2
 * 3
 */
function staticunset(){

    static $var=0;
    $var++;
    echo $var.PHP_EOL;
    unset($var);//断开$var 与静态变量的引用，下面的$var变量已经不再是对静态变量的引用
    $var=100;
}
staticunset();
staticunset();
staticunset();
/*
 * 1
 * 2
 * 3
 */
//References with global and static variables
/*PHP implements the static and global modifier for variables in terms of references. For example, a true global
variable imported inside a function scope with the global statement actually creates a reference to the global
variable. This can lead to unexpected behaviour which the following example addresses:*/

function test_global_ref() {
    global $obj;
    //$obj = &new stdclass;  //phpmanual example is outtime.
     $ob = new stdClass();
     $obj = &$ob;
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
/*
 * /vagrant/staticandglobal.php:52:
NULL
/vagrant/staticandglobal.php:54:
class stdClass#1 (0) {
}
 */
//A similar behaviour applies to the static statement. References are not stored statically:
function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign a reference to the static variable
        //$obj = &new stdClass(); //phpmanual example is not valid.
        $ob= new stdClass();
        $obj = &$ob;//$obj 是对对象的标志符的引用 $obj=&$ob=(id)
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
        $ob= new stdClass();
        $obj = $ob; //$obj = $ob =(id)
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
/*
 * Static object: /vagrant/staticandglobal.php:67:
NULL
Static object: /vagrant/staticandglobal.php:67:
NULL
Static object: /vagrant/staticandglobal.php:82:
NULL
Static object: /vagrant/staticandglobal.php:82:
class stdClass#4 (1) {
  public $property =>
  int(1)
}
 */
