<?php
flush();
ob_clean();
class A{

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        //var_dump(`pwd`);
   //     file_put_contents('test',`pwd`);
       // `touch 13333`;
        //var_dump(getcwd());
      // file_put_contents('pwd',getcwd()) ;
        var_dump(getcwd());
    }

}
//header('');
$obj = new A();
