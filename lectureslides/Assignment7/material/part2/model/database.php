<?php
$dsn = 'mysql:host=172.21.82.208;port=3306;dbname=xxxxxx'; //change dbname to your database name (your user name)
$username = 'yourusername';  //your username for logging in university server
$password = 'yourpassword';  //your password for logging in university server
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'errors/db_error_connect.php';
    exit;
}

function display_db_error($error_message) {
    include 'errors/db_error.php';
    exit;
}
?>