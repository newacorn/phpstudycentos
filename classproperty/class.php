<?php
class Foo
{
    public int $bar = 4;

    public ?string $baz = "abc";

    public array $list = [1, 2, 3];
}

$obj = new Foo();


var_dump($obj);
