<?php

class Cat {
    public $name;  
    private $age = 0;  

    
    public function getAge() {
        return $this->age;
    }

   
    public function setAge($age) {
        $this->age = $age;
    }

  
    public function birthday() {
        $this->age++;
    }

    public static function meow() {
        echo "meow!";
    }
}