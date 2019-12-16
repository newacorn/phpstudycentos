<?php
function Bar() {
    throw new Exception;
}
class A
{


    function Foo($v)
    {
        Bar();
    }

}
$obj = new A;
try {
    $obj->Foo(3);
} catch(Exception $e) {
    var_dump($e->getTrace());
}

try{

    throw new Exception("fe");
}catch (Exception $e){

  //  var_dump($e->getTrace(),$e->getTraceAsString());
}
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}
set_error_handler("exception_error_handler");

/* Trigger exception */
strpos();