<?php

class MySerializable implements Serializable{

    function __construct()
    {
    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
        return null;
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        var_dump(__METHOD__);
    }
}


$obj = new MySerializable();
$sobj = serialize($obj);
var_dump($obj);
