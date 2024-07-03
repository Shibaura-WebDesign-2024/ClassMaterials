<?php
require_once 'database.php';

try
{
  $conn = new PDO($attr, $user, $pass, $opts);
}
catch (\PDOException $e)
{
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Assuming your MySQL connection is already established

if (isset($_POST['register'])) {
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $query = "INSERT INTO users_assignment10 (forename, surname, username, password) VALUES (:forename, :surname, :username, :password)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':forename', $forename);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);
    
    if ($stmt->execute()) {
        echo "Registration successful! You can now <a href='index.php'>login</a>.";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
