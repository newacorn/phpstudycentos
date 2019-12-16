<?php

// The path to the FTP file, including login arguments
$ftp_path = 'ftp://vagrant:w1013d27@192.168.33.11/home/vagrant/example.txt';//php ftp wrapper host后必须用绝对路径不能用相对路径
// Allows overwriting of existing files on the remote FTP server
$stream_options = array('ftp' => array('overwrite' => false,
   'resume_pos' => 3
    ));
//只会检查overwrite有没有设置，不会检查其有没有设置为true或false，只要设置了，都会认为是true

// Creates a stream context resource with the defined options
$stream_context = stream_context_create($stream_options);

// Opens the file for writing and truncates it to zero length
if ($fh = fopen($ftp_path, 'a', 0, $stream_context)) {
    // Writes contents to the file
    fputs($fh, 'example contents 123');

    // Closes the file handle
    fclose($fh);
} else {
    die('Could not open file.');
}


if($fh = fopen($ftp_path, 'r', 0 , $stream_context)){

   var_dump( fgets($fh));
   fclose($fh) ;
}

mkdir('ftp://vagrant:w1013d27@192.168.33.11/home/vagrant/example');

//var_dump(STDIN);