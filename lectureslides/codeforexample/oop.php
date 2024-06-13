<!DOCTYPE html>
<html>
<head>
  <title>OOP Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h3>OOP Form</h3>
    <form action="oop.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <?php
      class User {
        private $name;
        private $age;
        
        public function __construct($name, $age) {
          $this->name = $name;
          $this->age = $age;
        }
        
        public function getName() {
          return $this->name;
        }
        
        public function getAge() {
          return $this->age;
        }
      }
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        
        $user = new User($name, $age);
        
        // Output the user details
        echo "<h4>User Details:</h4>";
        echo "<p>Name: " . $user->getName() . "</p>";
        echo "<p>Age: " . $user->getAge() . "</p>";
      }
    ?>
  </div>
</body>
</html>
