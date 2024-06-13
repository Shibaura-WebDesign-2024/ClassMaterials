<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Displaying Errors</title>
</head>
<body>
<h2>Testing Display Errors</h2>
<?php # Script 8.1 - display_errors.php

error_reporting(E_ALL);
// Show errors:
ini_set('display_errors', 1);

// Create errors:
foreach ($var as $v) {}
$result = 1/0;

?>
</body>
</html>