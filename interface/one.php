<?php
function count_to_ten() {
    yield 1;
    yield 2;
    yield from [3, 4];
    yield from new ArrayIterator([5, 6]);
    yield from seven_eight();
    return yield from nine_ten();
}

function seven_eight() {
    yield 7;
    yield from eight();
}

function eight() {
    yield 8;
}

function nine_ten() {
    yield 9;
    return 10;
}

$gen = count_to_ten();
foreach ($gen as $num) {
    echo "$num ";
}
//echo $gen->getReturn();

function gen(){

    for ($i= 1;$i<= 3; $i++){
        yield $i;
    }
    return 3;
}
$gen = gen();

foreach ($gen as $value){

    echo $value.PHP_EOL;
}

echo $gen->getReturn();

//$gen->rewind();

/*foreach ($gen as $value){

    echo $value.PHP_EOL;
}*/


function count_to_tena() {
    yield 1;
    yield 2;
    yield from [3, 4];
    yield from new ArrayIterator([5, 6]);
    yield from seven_eighta();
    yield 9;
    yield 10;
}
function seven_eighta() {
    yield 7;
    yield from eighta();
}

function eighta() {
    yield 8;
}

var_dump(iterator_to_array(count_to_tena()));

function foo(&$var)
{
//    $var =& $GLOBALS["baz"];
    $GLOBALS['baz'] = &$var;
}
foo($bar);
$baz = 3;

var_dump($bar);
$bar =90;
var_dump($baz);


function one(&$name){

   $name = 999;
}

function &two(&$name){
    return $name;
}

$var = 90;

one(two($var));

var_dump($var);

//one(new stdClass());

$arr =[1,2,3];
//$a = &$arr[0];
$arr[0] = &$a;
$arr2 = $arr;

$a = 100;

var_dump($arr2);

function &three(){
   $a =90;
   return two($a);
}

$m = &three();


var_dump($m);