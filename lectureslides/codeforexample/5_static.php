<?
class Example {
  public static $property = "Hello, I am a static property.<br>";

  public static function sayHello() {
    echo "Hello, I am a static method.";
  }
}

// Accessing static property
echo Example::$property;  // Output: Hello, I am a static property.

// Calling static method
Example::sayHello();  // Output: Hello, I am a static method.

?>
