<?php
class A {
    public static function who() {
        echo __CLASS__;
        static ::dog();
    }
    public static function test() {
        self::who();

    }
    public static  function dog(){

        var_dump(__CLASS__);
       var_dump(get_called_class());
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();
