<!DOCTYPE html>
<html>
<head>
    <title>PCRE Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>PCRE Example</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="inputString">Enter a string:</label>
                <input type="text" class="form-control" id="inputString" name="inputString" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputString = $_POST['inputString'];

            // Extract all words starting with 'PHP'
            //
            //Input your PHP code here
            //

            if (!empty($matches[1])) {
                
                //
                //Input your PHP code here
                //
            } else {
                echo '<div class="alert alert-info mt-3">No words starting with "PHP" found.</div>';
            }
        }
        ?>
    </div>
</body>
</html>
