<?php
//$loc_de = setlocale(LC_ALL, 'ge');
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

var_dump($loc_de);

var_dump(ord(strtoupper(chr(225))));
var_dump(ord(strtoupper(chr(192))));

