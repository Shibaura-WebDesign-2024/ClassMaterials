<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form method="POST" action="register.php">
            <label for="forename">Forename:</label>
            <input type="text" id="forename" name="forename" required><br><br>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required><br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="register" value="Register">
        </form>
        <p>Already have an account? <a href="index.php">Login here</a></p>
    </div>
</body>
</html>
