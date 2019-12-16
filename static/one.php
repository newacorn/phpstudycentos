<?php

function dog(){

    static $a=1;

    if($a <= 5){
     $b=  $a++;
       dog();
       echo $b;
    }
}
dog();
dog();
