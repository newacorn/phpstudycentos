<?php

/**
 * Class MyArrayAccess
 */
class MyArrayAccess implements ArrayAccess{
    private $arr = [];
    function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.

    }

    public function &offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
var_dump(__METHOD__);
        return $this->arr[$offset];

    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        $this->arr[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}

$obj = new MyArrayAccess([1,2,3]);

/*$var = &$obj[0];
$var = []; */ //等同于下面的方法
$obj[0] = []; //先将一维数组变成二维数组，不然不能进行间接赋值，因为$obj不是一个真正的数组，等同于在不能在
//一维的值为标量的情况下进行数组操作
$obj[0][1] = 90;


//类比变量
$a = 1;//标量 相当于对象的一维值
$a[1] = 100;
//Warning: Cannot use a scalar value as an array
$a = [];//
$a[1] = 100;

