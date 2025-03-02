<?php 
/*
    Create a Vehicle class with properties $brand and $model, and a method startEngine().

    Create two child classes named Car and Bike that inherit from the Vehicle class.

    Override the startEngine() method in the Car and Bike classes and print their own custom messages.

*/

// Parent class: Vehicle
class Vehicle {
    // Properties
    public $brand;
    public $model;

    // Constructor to initialize properties
    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to start the engine
    function startEngine() {
        return "Vehicle engine is starting...";
    }
}

// Child class: Car (inherits from Vehicle)
class Car extends Vehicle {
    // Override the startEngine() method
    function startEngine() {
        // Call the parent class's startEngine() method
        $parentMessage = parent::startEngine();
        return $parentMessage . " Car says: Peep! Peep!";
    }
}

// Child class: Bike (inherits from Vehicle)
class Bike extends Vehicle {
    // Override the startEngine() method
    function startEngine() {
        // Call the parent class's startEngine() method
        $parentMessage = parent::startEngine();
        return $parentMessage . " Bike says: Keek! Keek!";
    }
}

// Create objects and test
$car = new Car("Toyota", 2000);
echo $car->brand . " " . $car->model . " model: " . $car->startEngine() . PHP_EOL;

$bike = new Bike("Yamaha", "V4");
echo $bike->brand . " " . $bike->model . " model: " . $bike->startEngine();