<!DOCTYPE html>
<html>
  <head>
    <title>An Example Page of HTML + PHP</title>
    <style>
      .myclass {
        border:1px solid #999999;
        font:  normal 14px helvetica;
        color: #444444;
      }
    </style>

<body>
    <p class = "myclass">
<?php
echo "<p class = 'myclass'>Here are variable sections</p>";
$foo = 25;		// Numerical variable
$bar = "Hello";	// String variable
echo $bar;		// Outputs Hello
echo "<br>";
echo $foo, $bar;	// Outputs 25Hello
echo "<br>";
echo "5x5=", $foo;	// Outputs 5x5=25
echo "<br>";
echo "5x5=$foo";	// Outputs 5x5=25
echo "<br>";
echo '5x5=$foo';	// Outputs 5x5=$foo
?>
    </p>



    
<?php
echo "<p class = 'myclass'>";
for ($i = 1; $i <= 10; $i++) {
	echo $i;
}
print "<br>";
for ($i2 = 1;; $i2++) {
	if ($i2 > 10) {
		break;
	}
}
print "<br>";
$i3 = 1;
for (;;) {
	if ($i3 > 10) {
		break;
	}
	echo $i3;
	$i3++;
}
echo "</p>";
echo "<p>". phpinfo()
."</p>";
?>
<p class = "myclass">

<?
$families = array(
	"Griffin" => array(
		"Peter",
		"Lois",
		"Megan"
	),
	"Quagmire" => array("Glenn"),
	"Brown" => array(
		"Cleveland",
		"Loretta",
		"Junior"
	)
);

print_r($families);
?>
</p>

</body>

</html>