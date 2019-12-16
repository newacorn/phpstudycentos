<?php
$a = 'hello';
$$a = 'world';

echo "$a {${$a}}";
echo "$a ${$a}";//equal above

${"$a"}  =333;
${'hello'}=333;//equal above 在字符串中，{}里的字符，如果没有美元符号，是不能被解析的，只会把当成一个整体，变成带{}的字符串

$a = 'hello';
$$a = 'world';
var_dump($$a);
$e = 99;//serve for below
var_dump($$a[1]);//90
//$a[1] 是变量名
var_dump(${$a[1]});
//$$a是变量名
var_dump(${$a}[1]);//o 默认行为

//如果对象属性是变量或者是数组元素，则先解析对象属性名。后解析对象属性

$b = '1\'2\'3\'3\'4';
$a = "1'2'3'3'4";//其实$c 存储的字符串，就是1'2'3'3'4 ，上面两种只是一种表现形式书写形式。

var_dump($b===$a);//true
var_dump($a);//内在形式
$str =  var_export($a,true);
var_dump($str);//获取字符串$c 的一种表现形式，此表现形式是一种实现字符串$c书写方式。需要直接书写，在eval语句里要将这个值用做变量表示。
//如果用常量表示，需要再export 一次或者用双引号。因为eval解析字符串，后才被当作有效的php代码执行。

eval('$m='.$str.';');//字符串变量
var_dump($str);
eval('$n='."'1\'2\'3\'3\'4'".';'); //字符串常量
eval ('$o='.'\'1\\\'2\\\'3\\\'3\\\'4\''.';');//同上表现形式
$str = <<<EF
'1\'2\'3\'3\'4'
EF;
//同上表现形式
var_dump($str);
eval ('$p='.$str.';');
var_dump($m===$n,$n===$o,$o===$p);//true


var_dump(addslashes($m));


//$varname.ext=90;  /* 非法变量名 */

$am['a.b'] =90;


function cc(){
    define("FOO",     "something");

}

cc();
var_dump(FOO);


$arr = new stdClass();
define('TRUE',array( 1,2,3 )+array(4,5,6),false);
const Tr = 3;
//var_dump(TRUE);

//var_dump(constant('TR'));

include 'one/include.php';
trait A{

    function  dog(){

        var_dump(__METHOD__);
    }
}

class B{

    use A;

}
var_dump((new B())->dog());

(function(){
    var_dump(__FUNCTION__);
})();


