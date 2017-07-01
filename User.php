<?php

class User
{
    public $name = "GuVI";
    private $age = 10;
    protected $email = 'qqq@qq.qq';

    public function __construct($n)
    { $this->name = $n;
    }

    public function getAge(){
        return $this->age;
    }

    public function HelloWorld(){
        return 'ha ha ha';
    }
}