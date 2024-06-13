<?
class User {
    private $name;
    private $email;
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setEmail($email) {
      // Perform validation or business logic here
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->email = $email;
      } else {
        echo "Invalid email address!";
      }
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getEmail() {
      return $this->email;
    }
  }
  
  $user = new User();
  $user->setName("John Doe");
  $user->setEmail("john@example.com");
  
  echo "Name: " . $user->getName() . "\n";
  echo "Email: " . $user->getEmail() . "\n";
  ?>