<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Handling</title>
</head>
<body>
    <h2>Form Data Handling</h2>
    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dump all form data at once
        echo "<h3>All Form Data:</h3>";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
    ?>
</body>
</html>
