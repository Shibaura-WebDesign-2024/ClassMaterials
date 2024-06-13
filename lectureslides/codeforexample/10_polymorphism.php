<?

class Animal {
    public function makeSound() {
      echo "Animal makes a sound.";
    }
  }
  
  class Dog extends Animal {
    public function makeSound() {
      echo "Dog barks!";
    }
  }
  
  class Cat extends Animal {
    public function makeSound() {
      echo "Cat meows!";
    }
  }
  
  // Create objects of different classes
  $animal = new Animal();
  $dog = new Dog();
  $cat = new Cat();
  
  // Call the makeSound() method on different objects
  $animal->makeSound();  // Output: Animal makes a sound.
  $dog->makeSound();     // Output: Dog barks!
  $cat->makeSound();     // Output: Cat meows!

  
  
?>