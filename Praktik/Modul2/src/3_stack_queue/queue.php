<?php
namespace App;

class Queue {
    private $container = [];
    public function enqueue($v){ $this->container[] = $v; }
    public function dequeue(){ return array_shift($this->container); }
    public function peek(){ return reset($this->container); }
    public function isEmpty(){ return empty($this->container); }
}
