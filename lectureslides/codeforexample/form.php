<!DOCTYPE html>
<html>
<head>
  <title>String Manipulation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h3>String Manipulation</h3>
    <form action="form.php" method="POST">
      <div class="form-group">
        <label for="inputString">Enter a String:</label>
        <input type="text" class="form-control" id="inputString" name="inputString" value="<?php echo isset($_POST['inputString']) ? $_POST['inputString'] : ''; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        
        // Perform string manipulation operations
        $length = strlen($inputString);
        $uppercase = strtoupper($inputString);
        $lowercase = strtolower($inputString);
        
        // Output the results
        echo "<h4>Results:</h4>";
        echo "<p>Length of the string: " . $length . "</p>";
        echo "<p>Uppercase: " . $uppercase . "</p>";
        echo "<p>Lowercase: " . $lowercase . "</p>";
      }
    ?>
  </div>
</body>
</html>
