<?php // database.php
  $host = '172.21.82.208;port=3306';      // Change as necessary
  $data = 'proftest';   // Change as necessary
  $user = 'proftest';           // Change as necessary
  $pass = 'utf8mb4';               // Change as necessary
  $chrs = 'utf8mb4';
  $attr = "mysql:host=$host;dbname=$data;charset=$chrs";
  $opts =
  [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];
?>
