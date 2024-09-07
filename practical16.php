<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Login">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the username and password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // You can add your validation logic here
        // For example, checking the username and password against a database
        
        // For demonstration purposes, let's just print the submitted username and password
        echo "<p>Submitted Username: $username</p>";
        echo "<p>Submitted Password: $password</p>";
    }
    ?>
</body>
</html>
