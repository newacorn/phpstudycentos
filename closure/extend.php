<?php
class A{

}

class B extends A{


}
interface MM{
   // const AA = 88;
}

interface NN extends MM{
    const AA =888;
}

abstract class C{
//const AA = 33;
   function dog(B $a){

   }
     abstract function cat(array $a): iterable;
}

class D extends C implements MM{
//const AA = 44;
   function dog(A $a)
   {
   }
function cat(iterable $a): array {

}

}

