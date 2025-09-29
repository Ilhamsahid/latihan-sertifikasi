<?php
namespace App;

class Stack {
    private $container = [];
    public function push($v){ $this->container[] = $v; }
    public function pop(){ return array_pop($this->container); }
    public function peek(){ return end($this->container); }
    public function isEmpty(){ return empty($this->container); }
}
