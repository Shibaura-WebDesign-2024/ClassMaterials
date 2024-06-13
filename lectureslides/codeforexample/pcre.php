<!DOCTYPE html>
<html>
<head>
    <title>PCRE Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>PCRE Example</h2>
        <form method="POST" action="pcre.php">
            <div class="form-group">
                <label for="inputString">Enter a string:</label>
                <input type="text" class="form-control" id="inputString" name="inputString" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputString = $_POST['inputString'];
            $pattern = '/^[a-zA-Z\s]+$/'; // PCRE pattern to match alphabets and spaces

            if (preg_match($pattern, $inputString)) {
                echo '<div class="alert alert-success mt-3">Input string is valid.</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">Input string is invalid.</div>';
            }
        }
        ?>
    </div>
</body>
</html>
