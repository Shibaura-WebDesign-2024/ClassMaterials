<?
class Car {
  // Properties
  public $brand;
  private $color;

  // Method to set the color
  public function setColor($newColor) {
    $this->color = $newColor;
  }

  // Method to get the color
  public function getColor() {
    return $this->color;
  }
}

// Object instantiation
$myCar = new Car();

// Setting property value using a method
$myCar->setColor("Red");

// Getting property value using a method
echo "The color of the car is " . $myCar->getColor();
?>