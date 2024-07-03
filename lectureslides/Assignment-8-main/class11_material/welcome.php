<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <?php
        // Check if user is logged in
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // Get the forename and surname from session
            //Add appropriate code here to make the website work
            //Add appropriate code here to make the website work

            // Display welcome message and time of login
            //Add appropriate code here to make the website work
            echo "<p>Logged in at: " . date('Y-m-d H:i:s') . "</p>";
        } else {
            // Redirect to the login page if not logged in
            header("Location: index.php");
            exit();
        }
        ?>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
