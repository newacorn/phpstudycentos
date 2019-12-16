<?php
class A{
static $a = 90;
}
class B{
static $a=80;
}
$func = static function(){
 var_dump(__CLASS__);
    var_dump(get_called_class());
};

$func = $func->bindTo(null,'B');
$func();
