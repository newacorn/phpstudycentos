<?php
var_dump(1>(2>3),1 <= 1 == 1 );
//var_dump(1>2>3);

$c = 3;
$nu = ~~~++$c;

var_dump(1<<2);

var_dump(null??3);

//ar_dump('333dfd'/'111fff');
var_dump(-1>>33);

$format = '(%1$2d = %1$04b)   %2$2d   %3$s   %4$2d';

$operator = '&';
$test = 2;
foreach ([1,2,3,4] as $value){

    printf($format,$value & $test, $value, '&', $test );
    echo "\n";
}

var_dump('9'^ '12');
var_dump(1<<63);

var_dump('1.23'=='0000123e-2');//true
var_dump(000012);//10
var_dump((int)'00012');
$c = 000012;

var_dump($c);

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $b <=> $a; // -1

$c = new stdClass();
$a = [1,2];
var_dump($a <$c);


function standard_array_compare($op1, $op2)
{
    if (count($op1) < count($op2)) {
        return -1; // $op1 < $op2
    } elseif (count($op1) > count($op2)) {
        return 1; // $op1 > $op2
    }
    sort($op1);
    sort($op2);
    foreach ($op1 as $key => $val) {
        var_dump($key.'=>'.$val);

        var_dump($op1,$op2);

        if (!array_key_exists($key, $op2)) {
            return null; // uncomparable
        } elseif ($val < $op2[$key]) {
            return -1;
        } elseif ($val > $op2[$key]) {
          //  var_dump($val.'=='.$op2[$key].'key'.$key);
            return 1;
        }
    }
    return 0; // $op1 == $op2
}
function adog(){
//   throw new Exception('fdf');
}
var_dump(standard_array_compare([3,1,2],[3,2,1]));
ini_set('track_errors','On');
//$my_file = @file ('non_existent_file') or
//die ("Failed opening file: error was '$php_errormsg'");

//var_dump(@dog33(22),@JJ,@adog());
@intval(1,2,3,4);
@adog(1,2,3);
echo "ffefe`fef`ef";
testFunctionNesting(3, 1, 1, 1);

function testFunctionNesting($max, $increment, $preIncrement, $postIncrement)
{
    echo $increment.' - '.$preIncrement.' - '.$postIncrement;
    echo '<br>';

    if($increment>=$max)
    {
        $inc = $increment;
        $pre = $preIncrement;
        $post = $postIncrement;
        return;
    }


    testFunctionNesting($max, ($increment+1), (++$preIncrement), ($postIncrement++));
}
//var_dump([2,'1',3]==[3,1,'2']);//false
var_dump([3,'1',2]==[3,1,'2']);//true
$b = array(1 => "banana", "0" => "apple",0=>12);
var_dump($b);
$a = array(0=>"apple",1=> "banana");
$b = array(1 => "banana", '0' => "apple");
var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
$b = array('0' =>"apple",'1' => "banana");
var_dump($a === $b); // bool(true)

class AB{

}
$c = 'AB';
var_dump(new AB() instanceof $c );
$c = new AB();
$d = new AB();
var_dump( $c instanceof $d);
$a = 1;
$b = NULL;
$c = imagecreate(5, 5);
var_dump($a instanceof stdClass); // $a is an integer
var_dump($b instanceof stdClass); // $b is NULL
var_dump($c instanceof stdClass); // $c is a resource
var_dump(FALSE instanceof ABC);
function __autoload($str){

    var_dump($str);
}
$c = 'ABCD';

switch ('0'){
    case '0':
        echo "fist";
        break;

    case 0:
        echo "second";
        break;
    default:
        echo "default";
}
var_dump('0'| 'a');// 按字符串比较
var_dump('0'<=> 'a');// 按字符串比较
var_dump('40'>'3333');//按数字比较
var_dump('1'|'100');
//echo A::class;
//var_dump(new ABCD);

function getnum($ord){
    if ($ord==1 || $ord==2)
        return 1;
    $arr[2]=$arr[1]=1;
    for ($i =3;$i<=$ord;$i++){

        $arr[$i]=$arr[$i-1]+$arr[$i-2];
    }
    return $arr;
}

var_dump(getnum(7));

for ($i=0;false,true,false;){

    var_dump('test');
    break;
}