<?

// Define an interface
interface Animal {
    public function eat();
    public function sleep();
    public function makeSound();
  }
  
  // Implement the interface in a class
  class Cat implements Animal {
    public function eat() {
      echo "The cat is eating.";
    }
  
    public function sleep() {
      echo "The cat is sleeping.";
    }
  
    public function makeSound() {
      echo "Meow!";
    }
  }
  
  // Create an object of the class
  $cat = new Cat();
  
  // Call the methods defined in the interface
  $cat->eat();         // Output: The cat is eating.
  $cat->sleep();       // Output: The cat is sleeping.
  $cat->makeSound();   // Output: Meow!

  
  ?>