<?
// Class definition
class Car
{
  // Properties
  public $brand;
  public $color;

  // Method
  public function startEngine()
  {
    echo "The {$this->brand} car with color {$this->color} is starting the engine.";
  }
}

// Object instantiation
$myCar = new Car();

// Object property assignment
$myCar->brand = "Toyota";
$myCar->color = "Red";

// Object method invocation
$myCar->startEngine();
