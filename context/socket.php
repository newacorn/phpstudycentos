<?php

$opt = array(
    'socket' => array(
        'bindto' => '192.168.33.11:33334',
    )
);

$context = stream_context_create($opt);
echo file_get_contents('http://one.test/server/index.php',false,$context);
var_dump($_SERVER);

