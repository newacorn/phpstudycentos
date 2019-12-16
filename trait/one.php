<?php
trait Hello {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld($var) {
        var_dump($var);
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}

$c = new MyHelloWorld();

$c->getWorld(2);
