# Assignment-8
**Web Authentication System**
ou are given a partial code for a web authentication system in PHP.
Your task is to complete the missing parts and ensure that the website
functions correctly. The code includes database connectivity and basic
authentication logic. You need to fill in the missing code snippets to
implement the desired functionality.

First of all, please check that you have all of the required files as
follows:


<img width="130" alt="image" src="https://github.com/Shibaura-WebDesign-2024/Assignment-8/assets/80506579/6da7b781-34fc-438f-baf9-fa81aeab69d7">


Prepare your table in your database in university server
Before you start, you need to import users.sql to your database in the university server.
First, login to your phpMyAdmin in the university server using the method shown in Figure 1.




<img width="266" alt="image" src="https://github.com/Shibaura-WebDesign-2024/Assignment-8/assets/80506579/fbb6baed-ed34-473d-abee-23d89c151555">

Figure 1 Login to phpMyAdmin in the university server!




Import the users.sql code to phpMyAdmin in your university server.

After you successfully import, you should have the table name users_assignment8 with the following columns in your own database in the university server.


<img width="441" alt="image" src="https://github.com/Shibaura-WebDesign-2024/Assignment-8/assets/80506579/f7039ff0-3043-4022-85c9-664b7030269d">



Warning: you will get the error message if you already have the table users_assignment8 in your database. Please delete or rename appropriately.!
In database.php, change the values the following code to connect to your own database in the university server (the method was already described in Class 10 assignment, please refer to the document in Class 10)

Please note that you are provided with only one database in the university server.

$host = 'localhost';      // Change as necessary

$data = 'publications';	    // Database name: 

$user = 'root';           // Change as necessary

$pass = '';               // Change as necessary

Study the code carefully, you can start with index.php and try to imagine the connection between pages. This small website does not use the MVC pattern.


Study the code carefully, you can start with index.php and try to imagine the connection between pages. This small website does not use the MVC pattern.

You can check the solution website and try to input values from

http://172.21.82.208/gift/class11/sol/

Please test using username: test1, password: 1234


# Modify login.php

Modify login.php as noted in the orange box so that it could successfully verify the username and password from the table users_assignment8 and redirect to welcome.php page

```php
<?php
session_start();
// Assuming your MySQL connection is already established
require_once 'database.php';

try {
    $conn = new PDO($attr, $user, $pass, $opts);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_POST['login'])) {
    // Validate login credentials
    $username = $_POST['username']; // Assuming username is posted from form
    $password = $_POST['password']; // Assuming password is posted from form

    $query = "SELECT * FROM users_assignment8 WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['logged_in'] = true;
            header("Location: welcome.php"); // Redirect to welcome page after successful login
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>

```
# Modify logout.php
```php
<?php
// Assuming your PDO connection is already established

session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("Location: index.php");
exit();
?>
```

# Modify welcome.php
Modify the welcome.php so that it shows the greeting message as shown in Figure 3.. 
Note: The user in the example has registered with the information shown in Figure 2. 
 <img width="199" alt="image" src="https://github.com/Shibaura-WebDesign-2024/Assignment-8/assets/80506579/19f6dd9d-a651-41e0-a688-4d23c0ff27db">

Figure 2: Example of registration value for inputting in the registration.php page. 
The password is 1234

 
Figure 3: Example of the welcome page after successfully registering using the information in Figure 1.

```php
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
```






