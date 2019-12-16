<?php
//没有catch，只有finally会报错吗？//会报错
spl_autoload_register(function ($name){

    include_once "$name.php";
});
try{
   throw  new myException("first\x00sfsdfsdf");
}catch (myException $e){

   try{
      throw new Exception("second",2,$e);
   }
   catch (Exception $e) {

      var_dump($e->getMessage());
      var_dump($e->getPrevious()->getMessage());
      echo $e->getPrevious()->getMessage();

   }


}catch (myException $e){
   var_dump($e->getMessage().'Exception');
} finally{
var_dump("I am finally");
}
//var_dump(range(1,1,0));
/*
function xrange($start, $end, $step){
   $diff = $start<=>$end;
   if($diff < 0){
      if($step <= 0)
          throw  new LogicException('$step must be positive');
       for($i= $start; $i<= $end; $i+=$step)
           yield $i;
   }
   if($diff=== 0){
       throw  new LogicException('$start musn\'t equal to $end');
   }
   if($diff> 0){
       if ($step >= 0)
           throw new LogicException('$step must be negative');
       for ($i= $start; $i>= $end; $i= $i+$step)
           yield $i;
   }

}

foreach (xrange(1,5,1) as $value)
    echo $value.PHP_EOL;*/
/*
try{
    foreach (xrange(1,1,0) as $value){

    }
}catch (Exception $e){
    var_dump($e->getMessage());
}*/

echo "fasfsdf\000fsfsdf";