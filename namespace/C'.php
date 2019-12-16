<?php
namespace Q;
spl_autoload_register(function ($name){
    var_dump($name);
});
include 'B.php';
//use M\N  as c;
use M\N  ;
class N{

}

//var_dump(new c());

//var_dump(c\N);

var_dump(new N());
var_dump(N\N);
$clas = 'A';
//var_dump(N\N);
echo A::class;
