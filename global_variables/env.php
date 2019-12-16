<?php
//print_r($_ENV);
//print_r($_SERVER);
ini_set('track_errors','On');
set_error_handler(function ($errno ,$errstr){
    var_dump($errstr);
   //return false;

},-1);
echo $c;
var_dump($php_errormsg);
//var_dump(http_get_request_headers());
//var_dump(apache_response_headers());
var_dump(getallheaders());
var_dump(headers_list());
//var_dump($http_response);
var_dump($http_response_header);

var_dump($_SERVER);
var_dump($argc);
var_dump($argv);