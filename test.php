<?php

echo "a";
echo "b";
echo "c";
echo PHP_INT_MAX,PHP_INT_MIN," ",PHP_INT_SIZE;
var_dump((int) (PHP_INT_MIN -1));//output :int(-9223372036854775808)
var_dump((int) (PHP_INT_MAX +1));//output :int(-9223372036854775808)
/*如果浮点数超出了整数范围（32 位平台下通常为 +/- 2.15e+9 = 2^31，64 位平台下，除了 Windows，通常为 +/- 9.22e+18 = 2^63）
，则结果为未定义，因为没有足够的精度给出一个确切的整数结果。在此情况下没有警告，甚至没有任何通知！*/
$float_array = [0.,000.,.000,00e00];//all value is valid,all is double(0);
var_dump($float_array);

/*LNUM          [0-9]+
DNUM          ([0-9]*[\.]{LNUM}) | ({LNUM}[\.][0-9]*)
EXPONENT_DNUM [+-]?(({LNUM} | {DNUM}) [eE][+-]? {LNUM})*/

var_dump(NAN==true,NAN==NAN,NAN===true);//ture ,false ,false

echo '
this is a multiline
another line';
$a=8;
echo "\{$a}";//output \{8}
echo "{{$a}}";//output {8}
$b=<<<EF
eddd
eeee
EF;
echo $b;
class A{
    public $bar1 = 1;
    public $bararray= [1,2,3];
}
$obj = new A();
$bararray=['a','b','c'];
echo <<<EF
{$obj->bararray[1]}
$bararray[1]i
EF;
//echo "$obj->bararray[1]";
$juice = "apple";

echo "He drank some $juice juice.".PHP_EOL;
// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
echo "He drank some juice made of $juice.";

$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some juice made of $juice[0]s.".PHP_EOL; // Won't work
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

$ac = [[1,2,3]];
echo "{$ac[0][0]}";
//echo "$ac[0][0]";//Notice: Array to string conversion
//简单语法下，字符串中对象属性和数组解析，只会解析一次，一维，然后直接输出，如果对象属性不是可自动转化成字符串的会出现notice，如果不是二维数组，也会notice。
//当在字符串中使用多重数组时，一定要用括号将它括起来
function dog(){
    return "abc";
}
class B{
    public $abc=123;
    const A="dog";
    static function A(){
        return "I am a function";

    }
}

$ojb = new B();
$dog="dog";
echo " {$ojb->{dog()} }";
echo "{dog()}  {$ojb->{${B::A}()}}";
//echo "{dog()}  {$ojb->${B::A}()}";

echo "{$a}";

const ABC = 'dog';
echo "{${ABC}}";
echo "{ABC}";
/*任何具有 string 表达的标量变量，数组单元或对象属性都可使用此语法。
只需简单地像在 string 以外的地方那样写出表达式，然后用花括号 { 和 } 把它括起来即可。由于
{ 无法被转义，只有 $ 紧挨着 { 时才会被识别。可以用 {\$ 来表达 {$。下面的示例可以更好的解释：*/

/*Note:
函数、方法、静态类变量和类常量只有在 PHP 5 以后才可在 {$} 中使用。
然而，只有在该字符串被定义的命名空间中才可以将其值作为变量名来访问。
只单一使用花括号 ({}) 无法处理从函数或方法的返回值或者类常量以及类静态变量的值。*/


$str = "string";
$str[1]="abcd";
//$str[0]="";//不能将空字符串赋值，会发出waring错误，并且不会影响原有字符串。不会像php中文手册上说的赋值null
$str[10]='c';
var_dump($str);
var_dump($str{ -1 }); //输出c字符，不会像php中文手册上写的那样发生notice，输出空字符
//PHP Deprecated:  Array and string offset access syntax with curly braces is deprecated
//自 PHP 5.4 起字符串下标必须为整数或可转换为整数的字符串，否则会发出警告。之前类似 "foo" 的下标会无声地转换成 0。

$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));//true

//var_dump($str['1.0']);//notice
var_dump(isset($str['1.0']));//false

//var_dump($str['x']);//notice
var_dump(isset($str['x']));//false

//var_dump($str['1x']);//notice
var_dump(isset($str['1x']));//false

$a = 123;
//var_dump($a[2]);  //notice NULL
//用 [] 或 {} 访问任何其它类型（不包括数组或具有相应接口的对象实现）的变量只会无声地返回 NULL。
var_dump("fsdfd"[2]);//PHP 5.5 增加了直接在字符串原型中用 [] 或 {} 访问字符的支持。

$a = 1;
var_dump([-1=>33,+1=>8888,1,2,3,null=>333333]['+1']);//要是合法的十进制字符串才可以被转化成数字下标。带+的十进制字符串不会被解释成整数，而是解析成带+的字符串。
var_dump($arr = [-1=>33,+1=>8888,1,2,3,null=>333333]);//要是合法的十进制字符串才可以被转化成数字下标。带+的十进制字符串不会被解释成整数，而是解析成带+的字符串。
var_dump($arr[null]);//null下标会被当成空字符串。自动转换。
var_dump($arr[""]);//同上
//var_dump($arr[]); //error

$arr =['a'=>1,'b'=>2];
//var_dump($arr[0]);//null   PHP 实际并不区分索引数组和关联数组。notice:undefined offset









//var_dump(gettype(3+"+0.333jjjj"));

var_dump(B::A());

$arr = 'iloveyou';
//$arr[] =4;//Fatal error: Uncaught Error: [] operator not supported for
var_dump($arr);

var_dump( $arr['a']);

class C {
    private $A;
    protected $m;
}
$obj= new C();
$obj->{1}=44;
var_dump($obj);
var_dump((array)$obj); //整数属性可以访问
var_dump((array)NAN);//[0]=>double(NAN)

$arr = [1,2,3,4];

foreach ($arr as &$value){
    $value = $value*2;
}

foreach ($arr as $value){


}

var_dump($arr);

//$cc = &$arr[1];
$arr[1] = &$cc;
$bb = $arr;

$cc = 100;
var_dump($arr,$bb);
$obj = (object) array(1 => 'foo');
var_dump(isset($obj->{1})); // PHP 7.2.0 后输出 'bool(true)'，之前版本会输出 'bool(false)'
var_dump(isset($obj->{"1"})); // PHP 7.2.0 后输出 'bool(true)'，之前版本会输出 'bool(false)'
var_dump(key($obj)); // PHP 7.2.0 后输出 'string(1) "1"'，之前版本输出  'int(1)'
var_dump($obj);
var_dump(is_object($obj));
class N{
    public $c =20;
    public $d=99;
    //public $1=88;
}
$obj = new N();
$obj->{1} =999;//also $obj->{'1'}=999
var_dump(key(new N()));

$a = 90;
var_dump((object)$a);
/*class stdClass#1 (1) {
  public $scalar =>
  int(90)
}*/

var_dump((object)null == false);
$n = null;

var_dump((unset)$n);

function test(&$var){
    $var=$var*2;


}
$va = 99;
test($va);
var_dump($va);

function testtwo($var){

   testone($var);
   var_dump($var);
}
function testone(&$var){
    $var++;


}
$var = 3;

testtwo(3);

var_dump($var);
testone($var);

var_dump($var);

/*function increment(&$var)
{
    $var++;
}

$a = 0;
call_user_func('increment', $a);
echo $a."\n";

// You can use this instead
call_user_func_array('increment', array(&$a));
echo $a."\n";

$m =90;

increment($m);*/

/*function a1(){

    throw new Exception('3323');

}
a1();*/
var_dump((array)3);
$a = 90;
var_dump(b"$a",(binary)$a);//same
var_dump($a[1]);
$b = 'abc';
$b[10]=1;
$b[3]=null;
var_dump(ord($b[3]));//32 space


var_dump($cc = "123\x002");
$cc[3] = 3;
var_dump($cc);


$str = "test";
$str[3]=""; //Warning: Cannot assign an empty string to a string offset
var_dump($str);
/*
 * output string(5) "12332"
 */

$str[3]= null;
var_dump($str);//Warning: Cannot assign an empty string to a string offset
/**
 * string(4) "test"

 */

$str = "test"."\000";
var_dump($str);//string(5) "test\000"
$str[4]=3;
/*
 * Warning: Cannot assign an empty string to a string offset
 */
var_dump($str);
//string(5) "test3"

$varname = 3;
var_dump(ord($varname));
$$varname =3;
var_dump($$varname);
//$3 =33;
$我=900;
var_dump(${"3"});

${"3"} = 333;
var_dump(${"3"});

//函数返回引用

function &car(){

    static $a = 1;
    return $a;
}

$c = car();
$c = 100;

var_dump(car());

//$this = 'text'; // error

//$name = 'this';
//$$name = 'text'; // sets $this to 'text'

${'a'} = 34;
var_dump($a);
$arr  = [false, null, NAN];


var_dump(isset($arr[2]));

function test33()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test33();
    }
    //$count--;
    echo $count--;
}

test33();

define('BB',233);
function dd(){
   static $cc = 2+3;
echo $cc;
}

dd();

