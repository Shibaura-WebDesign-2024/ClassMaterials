<?php
    $dsn = 'mysql:host=172.21.82.208;port=3306;dbname=xxxxxx'; //change dbname to your database name (your user name)
    $username = 'yourusername';  //your username for logging in university server
    $password = 'yourpassword';  //your password for logging in university server

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>