<?
$number = 10;

if ($number > 5) {
  echo "Number is greater than 5.";
} else {
  echo "Number is not greater than 5.";
  die(); // Terminate the script
}

// The code below will not be executed
echo "This line will not be displayed.";

?>