<?php
$opts = array(

    'zip'=>[

        'password'=>'acorn',
    ],
);
$context = stream_context_create($opts);
var_dump(file_get_contents('zip://../zip/test.zip#test.txt'));
var_dump(file_get_contents('zip://../zip/t.zip#test.txt',false,$context));
var_dump(file_get_contents('zip://../zip/a.zip#a/b/c/test.txt',false,$context));
$fp = fopen('zip://./test.txt.zip#test.txt','r');
var_dump($fp);

