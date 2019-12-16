<?php
var_dump('$');

$ab=3;
echo "{${'a'.'b'}}";

$array = [
[
    [
    [1, 2],
    [3, 4],
        ]
    ]
];

foreach ($array as list($a, $b)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b\n";
    var_dump($a,$b);
}
class ok {

    function foo() {
        echo "start\n";

        for ($i = 0; $i < 5; $i++) {
            echo "before\n";
            $this->bar($i);
            echo "after\n";
        }

        echo "finish\n";
    }

    function bar($i) {
        echo "inside iteration $i\n";

        if ($i == 3) {
            echo "continuing\n";
            //continue;
        }

        echo "inside after $i\n";
    }
}

$ex = new ok();

$ex->foo();

var_dump("12">"7");

switch ('aeaaaa') {
    default         : echo "DEFAULT TOP 1"; break;

    case 'aaaaa': echo "CASE TOP 1"; break;
    case 'aaaaa': echo "CASE TOP 2"; break;


    case 'aaaaa': echo "CASE BOTTOM 1"; break;
    case 'aaaaa': echo "CASE BOTTOM 2"; break;
}

declare(ticks=1);

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a);
}

//declare(encoding='ISO-8859-1');
echo "我的对你";

