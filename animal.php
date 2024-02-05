<?php
class Animal {
    public $name,
    $legs = 4,
    $cold_blooded = 'no';
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getLegs() {
        return $this->legs;
    }

    public function getcold_blooded() {
        return $this->cold_blooded;
    }
}


?>

