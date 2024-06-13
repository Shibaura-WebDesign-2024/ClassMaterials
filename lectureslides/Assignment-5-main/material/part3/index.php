<!DOCTYPE html>
<html>
<head>
  <title>OOP Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h3>OOP Form</h3>
    <form action="part3.php" method="POST">
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

      //Create the class and method here
      //
      //Input your PHP code here
      //
        public function getName() {
          //Input your PHP code here
        }
        
        public function getAge() {
         //Input your PHP code here
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
