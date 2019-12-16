<?php
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

var_dump($loc_de);
var_dump(ord(strtoupper(chr(225))));
var_dump(ord(strtoupper(chr(192))));
getord(strtoupper("我"));
getord("我");
function getord($char){
    $size = strlen($char);
    for ($i=0; $i < $size; $i++)
        echo ord($char[$i]).'-';
    echo PHP_EOL;
}
