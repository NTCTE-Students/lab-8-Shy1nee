<?php

class Animal {
    public function eat() {
        return "Eating...";
    }

    public function sleep() {
        return "Sleeping...";
    }
}

class Bird extends Animal {
    public function fly() {
        return "Flying...";
    }
}

class Fish extends Animal {
    public function swim() {
        return "Swimming...";
    }
}

class Mammal extends Animal {
    public function walk() {
        return "Walking...";
    }
}

// Пример создания объектов
$bird = new Bird();
$fish = new Fish();
$mammal = new Mammal();

echo $bird->eat() . " " . $bird->fly() . "<br>";
echo $fish->eat() . " " . $fish->swim() . "<br>";
echo $mammal->eat() . " " . $mammal->walk() . "<br>";
