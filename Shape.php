<?php
class Shape{
    public $name;
    public function __construct($name)
    {
        $this->nam=$name;
    }
    public function show(){
        return "I am a shape. My name is $this->name";
    }
}