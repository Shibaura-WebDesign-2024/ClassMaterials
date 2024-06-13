<?
class Example {
    private $data = [];
  
    // Magic method to handle setting inaccessible properties
    public function __set($name, $value) {
      $this->data[$name] = $value;
    }
  
    // Magic method to handle getting inaccessible properties
    public function __get($name) {
      if (isset($this->data[$name])) {
        return $this->data[$name];
      }
      return null;
    }
  
    // Magic method to handle calling inaccessible methods
    public function __call($name, $arguments) {
      echo "Calling method: $name with arguments: " . implode(', ', $arguments);
    }
  }
  
  // Create an object of the Example class
  $example = new Example();
  
  // Set an inaccessible property using the magic __set method
  $example->name = "John";
  
  // Get the value of the inaccessible property using the magic __get method
  echo $example->name;  // Output: John
  
  // Call an inaccessible method using the magic __call method
  $example->sayHello("Good morning!");  // Output: Calling method: sayHello with arguments: Good morning!
?>  