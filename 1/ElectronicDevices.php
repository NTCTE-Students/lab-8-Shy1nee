<?php

class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        return "{$this->brand} - {$this->model}";
    }
}

class Smartphone extends Device {
    public function call() {
        return "Making a call from {$this->model}.";
    }
}

class Laptop extends Device {
    public function work() {
        return "Working on {$this->model}.";
    }
}

class Tablet extends Device {
    public function browse() {
        return "Browsing the web on {$this->model}.";
    }
}

// Пример создания объектов
$smartphone = new Smartphone("Apple", "iPhone 12");
$laptop = new Laptop("Dell", "XPS 13");
$tablet = new Tablet("Samsung", "Galaxy Tab");

echo $smartphone->getInfo() . " - " . $smartphone->call() . "<br>";
echo $laptop->getInfo() . " - " . $laptop->work() . "<br>";
echo $tablet->getInfo() . " - " . $tablet->browse() . "<br>";

