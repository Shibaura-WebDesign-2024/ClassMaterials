<!DOCTYPE html>
<html>
<head>
  <title>String Manipulation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h3>String Manipulation</h3>
    <form action="part2.php" method="POST">
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
        //
        //Input your PHP code here
        //
        // Output the results
        //
        //Input your PHP code here
        //
      }
    ?>
  </div>
</body>
</html>
