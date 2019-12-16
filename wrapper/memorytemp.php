<?php

var_dump(sys_get_temp_dir());

//file_put_contents('');

$f = fopen('php://memory','r+');
var_dump($f);
//fwrite($f,'abc');
fputs($f,'abc');
rewind($f);
//var_dump(stream_get_contents($f));
var_dump(fgets($f));
fclose($f);

$fiveMBs = 5 * 1024 * 1024;
$fp = fopen("php://memory", 'r+');

fputs($fp, "hello\n");

// Read what we have written.
rewind($fp);
echo stream_get_contents($fp);
var_dump(fclose($fp));
file_put_contents("php://filter/string.rot13/resource=example.txt","Hello abc World");
echo file_get_contents('example.txt');