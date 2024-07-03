<?php
session_start();
// Assuming your MySQL connection is already established
require_once 'database.php';

try
{
  $conn = new PDO($attr, $user, $pass, $opts);
}
catch (\PDOException $e)
{
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_POST['login'])) {
    //Add appropriate code here to make the website work
    //Add appropriate code here to make the website work

    // Validate login credentials
    $query = "SELECT * FROM users_assignment10 WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
   
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashedPassword = $row['password'];
        $forename = $row['forename'];
        $surname = $row['surname'];

        if (password_verify($password, $hashedPassword)) {
            //Add appropriate code here to make the website work
            //Add appropriate code here to make the website work
            //Add appropriate code here to make the website work

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
