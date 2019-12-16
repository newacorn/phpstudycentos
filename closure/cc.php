<?php

class CacheFile
{
    private $filename;
    private $data;
    private $dirty = false;

    function __construct($filename)
    {
        $this->filename = __DIR__.'/'.$filename;
     //   $this->filename = realpath($filename);

        $this->load();
    }

    function __destruct()
    {
        // Calling file_put_contents within a destructor causes files to be written in SERVER_ROOT...
        $this->flush();
    }

    private function load()
    {
        if (!file_exists($this->filename)) {
            $this->data = array();
        } else {
            $this->data = unserialize(file_get_contents($this->filename));
            // todo
        }
        $this->dirty = false;
    }

    private function persist()
    {
        file_put_contents($this->filename, serialize($this->data));
        $this->dirty = false;
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            return false;
        }
    }

    public function set($key, $value)
    {
        if (!array_key_exists($key, $this->data)) {
            $dirty = true;
        } else if ($this->data[$key] !== $value) {
            $dirty = true;
        }
        if ($dirty) {
            $this->dirty = true;
            $this->data[$key] = $value;
        }
    }

    public function flush()
    {
        if ($this->dirty) {
            $this->persist();
        }
    }
}


$cache = new CacheFile("cache");
var_dump($cache->get("item"));
$cache->set("item", 42);
//$cache->flush();
var_dump($cache->get("item"));
