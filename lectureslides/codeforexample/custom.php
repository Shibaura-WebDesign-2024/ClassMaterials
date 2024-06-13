<!DOCTYPE html>
<html>
<head>
  <title>Error & Exception Handling</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h3>Error & Exception Handling</h3>
    <form action="custom.php" method="POST">
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
        $customError = $_POST["error"];
        $customException = $_POST["exception"];
        
        // Custom error handler
        function customErrorHandler($errno, $errstr) {
          echo "<p><strong>Custom Error:</strong> $errstr</p>";
        }
        
        // Set custom error handler
        set_error_handler("customErrorHandler");
        
        // Trigger custom error
        trigger_error($customError, E_USER_ERROR);
        
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
