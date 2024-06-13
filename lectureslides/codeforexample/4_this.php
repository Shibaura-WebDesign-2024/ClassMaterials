<?
class Example {
  private $name;

  public function setName($name) {
    $this->name = $name;
  }

  public function sayHello() {
    echo "Hello, my name is " . $this->name;
  }
}

// Create an object of the Example class
$example = new Example();

// Set the name using the setName() method
$example->setName("John");

// Call the sayHello() method
$example->sayHello();  // Output: Hello, my name is John
?>