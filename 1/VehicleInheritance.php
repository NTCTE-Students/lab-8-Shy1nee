<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }
}

// Пример создания объектов и вывода информации
$car = new Car("Toyota", "Corolla", 2021, 4);
$bike = new Bike("Yamaha", "R1", 2020, "Sport");
$truck = new Truck("Volvo", "FH", 2019, 15);

echo $car->getInfo() . " - Doors: {$car->doors}<br>";
echo $bike->getInfo() . " - Type: {$bike->type}<br>";
echo $truck->getInfo() . " - Load Capacity: {$truck->loadCapacity} tons<br>";

