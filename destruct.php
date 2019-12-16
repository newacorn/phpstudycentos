<?php
class A{

   function __destruct()
   {
       // TODO: Implement __destruct() method.
       var_dump(getcwd());
   }

}
$obj = new A();
