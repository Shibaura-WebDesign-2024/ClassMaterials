<html>

<head>
    <title>Temperature Conversion</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Fahrenheit temperature:
            <input type="text" name="fahrenheit" /><br />
            <input type="submit" value="Convert to Celsius!" />
        </form>
    <?php
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fahrenheit = $_POST['fahrenheit'];
        $celsius = ($fahrenheit - 32) * 5 / 9;
        printf("%.2fF is %.2fC", $fahrenheit, $celsius);
    } else {
        die("This script only works with GET and POST requests.");
    } ?>
</body>

</html>

