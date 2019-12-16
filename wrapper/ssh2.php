<?php

//echo file_get_contents('ssh2.sftp://vagrant:w1013d27@192.168.33.11:22/home/vagrant/example.txt');
$session = ssh2_connect('192.168.33.11',22);
//ssh2_auth_pubkey_file($session,)
ssh2_auth_password($session,'vagrant','w1013d27');
$sftp = ssh2_sftp($session);

echo file_get_contents("ssh2.sftp://".intval($sftp)."/home/vagrant/example.txt",'r');
echo "fwefwe";


$opts = [

    'ssh2'=>[
        'pubkey_file'=>'/root/.ssh/id_rsa.pub',
        'privkey_file'=>'/root/.ssh/id_rsa',
        'methods'=>'hostkey'
    ]

];

$context = stream_context_create($opts);


//$ftp_path = 'ssh2.sftp://vagrant:w1013d27@192.168.33.11/home/vagrant/example.txt';
//$ftp_path = 'ssh2.sftp://192.168.33.11/home/vagrant/example.txt';
//$fh = fopen($ftp_path,'r',false,$context);
//var_dump($fh);
file_get_contents('ssh2.sftp://192.168.33.11:22/root/test.txt',false,$context);


$session = ssh2_connect('192.168.33.11',22);
//ssh2_auth_pubkey_file($session,)
ssh2_auth_password($session,'vagrant','w1013d27');
$sftp = ssh2_sftp($session);
echo PHP_EOL;
//file_get_contents('ssh2.exec://'.intval($sftp).'/bin/ls /home/vagrant');
echo file_get_contents('ssh2.sftp://'.intval($sftp).'/home/vagrant/example.txt');
//echo file_get_contents("ssh2.sftp://".intval($sftp)."/home/vagrant/example.txt",'r');


$session1 = ssh2_connect('192.168.33.11',22,['hostkey'=>'ssh-rsa']);
$bool = ssh2_auth_pubkey_file($session1,'root','/root/.ssh/id_rsa.pub','/root/.ssh/id_rsa','');
$sftp= ssh2_sftp($session1);

echo file_get_contents('ssh2.sftp://'.intval($sftp).'/root/test.txt');
var_dump($bool);

