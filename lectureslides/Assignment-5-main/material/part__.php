<?php
class Car {
    private $make;
    private $model;
    private $year;
    private $color;

    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getColor() {
        return $this->color;
    }

    public function displayDetails() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

// Create an instance of Car
$car = new Car("Toyota", "Camry", 2021, "Silver");

// Display car's details
$car->displayDetails();
?>
