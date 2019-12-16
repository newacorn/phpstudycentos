<?php

$opts = array(

    'ssl'=>[
//        'peer_name'=>'www.hi-mac.cn',
        'peer_name'=>'one.test',
        'verify_peer'=>true,
        'verify_peer_name'=>true,
        'allow_self_signed'=>false,
//        'cafile'=>'/usr/local/var/www/context/cacert.pem'
//        'cafile'=>'/usr/local/var/www/context/one.test.pem',
        'capath'=>'/var/www/vhosts/one.test/ssl',
        'local_cert'=>'/var/www/vhosts/one.test/ssl/client.crt',
        'local_pk'=>'/var/www/vhosts/one.test/ssl/client.key',
        "capture_peer_cert" => true,
        'peer_fingerprint'=>['sha1'=>'39:EE:E3:F1:76:9C:1D:85:4A:44:6F:E5:50:AD:EB:3D:BD:14:23:CD'],
       // 'peer_fingerprint'=>'80ccd2a13791f15ccdb4143fbdd03551',

    ]

);

$context = stream_context_create($opts);
//echo file_get_contents('https://www.hi-mac.cn',false,$context);
echo file_get_contents('https://one.test/index.html',false,$context);
