<?php
ini_set('display_errors','On');
ini_set('error_reporting','-1');
ini_set('log_errors','On');
ini_set('error_log','error.log');
set_error_handler(function ($errno, $errstr){
   var_dump($errstr);
},-1);
try{

   function dog(stdClass $a) {


   }
   dog(3);
}catch (Error $e){

var_dump($e->getMessage());
}
//dog(3);
echo  $c;

function cat(stdClass $a){


}
//cat(3);






