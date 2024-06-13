<?
abstract class Shape {
    protected $color;
  
    public function setColor($color) {
      $this->color = $color;
    }
  
    abstract public function calculateArea();
  }
  
  class Circle extends Shape {
    private $radius;
  
    public function __construct($radius) {
      $this->radius = $radius;
    }
  
    public function calculateArea() {
      return 3.14 * pow($this->radius, 2);
    }
  }
  
  class Rectangle extends Shape {
    private $length;
    private $width;
  
    public function __construct($length, $width) {
      $this->length = $length;
      $this->width = $width;
    }
  
    public function calculateArea() {
      return $this->length * $this->width;
    }
  }
  
  $circle = new Circle(5);
  $circle->setColor("Red");
  echo "Circle Area: " . $circle->calculateArea() . "\n";
  
  $rectangle = new Rectangle(4, 6);
  $rectangle->setColor("Blue");
  echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
  

  /*
  We have an abstract class called Shape that defines the concept of a shape with a protected property $color and a regular method setColor().
Inside the Shape class, we also have an abstract method calculateArea() that is declared without an implementation.
The Circle and Rectangle classes extend the Shape abstract class and provide their own implementations for the calculateArea() method.
Each subclass can have its own properties and methods in addition to implementing the abstract method.
  */
?>
