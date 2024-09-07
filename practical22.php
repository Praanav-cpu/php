<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Dump</title>
</head>
<body>
    <h2>Form Data Dump</h2>
    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    // Dump all form data at once
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>All Form Data:</h3>";
        echo "<pre>";
        var_dump($_REQUEST);
        echo "</pre>";
    }
    ?>
</body>
</html>
