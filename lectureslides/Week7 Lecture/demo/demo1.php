<?php
//echo phpinfo();
//exit;

echo "Hi, I'm a PHP script!"; ?>
<?php
echo "<p>Here are the comment in php</p>";
//php comment
#php comment
/*php block comment
php block comment
php block comment*/

echo "<h1>This is H1</h1>";
?>

<?php
$foo = 25;		// Numerical variable
$bar = "Hello";	// String variable
$foo = ($foo * 7);	// Multiplies foo by 7
//$bar = ($bar * 7);	// Invalid expression
echo "Here";
?>

<?php
echo "<p>Here are variable sections</p>";
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

<?php
$a	=	15;
$b	=	30;
$total	=	$a + $b;
print $total;
print "<p><h1>$total</h1>";
// total is 45
?>

<?php
$string1 	=	"Hello";
$string2	=	"PHP";
$string3	= $string1 . " " . $string2 . "<br>";
print $string3;
?>

<?php
$heading = "\"Computer Science\"";
print $heading;
?>

<?php
$foo = 10;
if ($foo == 0) {
	echo 'The variable foo is 	equal to 0';
} else if (($foo > 0) && ($foo <= 5)) {
	echo 'The variable foo is between 1 	and 5';
} else {
	echo 'The variable foo is equal to 	' . $foo;
}
?>

<?php
$user = "John";
if ($user == "John") {
	print "Hello John.";
} else {
	print "You are not John.";
}
?>

<?php
$i = 1;
switch ($i) {
	case 0:
		echo "i equals 0";
		break;
	case 1:
		echo "i equals 1";
		break;
	case 2:
		echo "i equals 2";
		break;
}
?>
<?php
$count = 0;
while ($count < 3) {
	print "hello PHP. ";
	$count += 1;
	// $count = $count + 1;
	// or
	// $count++;
}
?>

<?php
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
?>
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
	$value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>

<?php
echo "<p><h1>Array</h1><p>";
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
print_r($paper);
echo "<p>";
$paper2[0] = "Copier";
$paper2[1] = "Inkjet";
$paper2[2] = "Laser";
$paper2[3] = "Photo";
print_r($paper2);

for ($j = 0; $j < 4; ++$j)
	echo "$j: $paper[$j]<br>";

?>

<?php
echo "<p>";
$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser'] = "Laser Printer";
$paper['photo'] = "Photographic Paper";
echo $paper['laser'];
echo "<p>";
?>

<?php
$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "p1 element: " . $p1[2] . "<br>";
$p2 = array(
	'copier' => "Copier & Multipurpose",
	'inkjet' => "Inkjet Printer",
	'laser' => "Laser Printer",
	'photo' => "Photographic Paper"
);
echo "p2 element: " . $p2['inkjet'] . "<br>";
?>

<?php
$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;
foreach ($paper as $item) {
	echo "<br>$j: $item<br>";
	++$j;
}
?>

<?php
$paper = array(
	'copier' => "Copier & Multipurpose",
	'inkjet' => "Inkjet Printer",
	'laser' => "Laser Printer",
	'photo' => "Photographic Paper"
);
foreach ($paper as $item => $description)
	echo "$item: $description<br>";
?>

<?php
$products = array(
	'paper' => array(
		'copier' => "Copier & Multipurpose",
		'inkjet' => "Inkjet Printer",
		'laser' => "Laser Printer",
		'photo' => "Photographic Paper"
	),
	'pens' => array(
		'ball' => "Ball Point",
		'hilite' => "Highlighters",
		'marker' => "Markers"
	),
	'misc' => array(
		'tape' => "Sticky Tape",
		'glue' => "Adhesives",
		'clips' => "Paperclips"
	)
);
echo "<pre>";
foreach ($products as $section => $items)
	foreach ($items as $key => $value)
		echo "$section:\t$key\t($value)<br>";
echo "</pre>";

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
?>

<?php
$stuff = array(
	"name" => "Chuck",
	"course" => "PHPIntro"
);
print_r($stuff);
?>
