<!DOCTYPE html>
<html>
<head>
  <title>Error & Exception Handling</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h3>Error & Exception Handling</h3>
    <form action="part4.php" method="POST">
      <div class="form-group">
        <label for="error">Custom Error:</label>
        <input type="text" class="form-control" id="error" name="error" value="<?php echo isset($_POST['error']) ? $_POST['error'] : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="exception">Custom Exception:</label>
        <input type="text" class="form-control" id="exception" name="exception" value="<?php echo isset($_POST['exception']) ? $_POST['exception'] : ''; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Get the user's input for error message and exception message
        //
        //Input your PHP code here
        //
        
        // Custom error handler
        function customErrorHandler($errno, $errstr) {
          echo "<p><strong>Custom Error:</strong> $errstr</p>";
        }
        
        // Set custom error handler
        //
        //Input your PHP code here
        //
        
        // Trigger custom error
        //
        //Input your PHP code here
        //
        
        // Custom exception class
        class CustomException extends Exception {
          public function __toString() {
            return "<strong>Custom Exception:</strong> " . $this->getMessage();
          }
        }
        
        try {
          // Throw custom exception
          throw new CustomException($customException);
        } catch (CustomException $e) {
          echo "<p>" . $e . "</p>";
        }
      }
    ?>
  </div>
</body>
</html>
