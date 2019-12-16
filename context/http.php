<?php
$postdata = http_build_query(
    array(
        'var1' => 'some content',
        'var2' => 'doh'
    )
);

//var_dump($postdata);


$opts = array(
    'http' => array(
        'method'=>'POST',
        'header'=>'Content-type: application/x-www-form-urlencoded',
        'content'=>$postdata,

    ),
    'socket'=>array(
        'bindto'=>'0:44444',
    )
);

$proxy = array(
    'http' => array(
        'method'=>'GET',
        'proxy'=>'tcp://192.168.33.1:8001',
        'request_fulluri'=>true,
    ),
);

$context = stream_context_create($opts);
echo file_get_contents('http://one.test/context/httpindex.php',false,$context);
//echo file_get_contents('http://one.test/context/httpindex.php');
//$context = stream_context_create($proxy);
//echo file_get_contents('https://google.com',false,$context);
//echo file_get_contents('http://192.168.33.1');

