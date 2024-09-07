<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Area Demo</title>
</head>
<body>
    <h2>Text Area Demo</h2>
    <form method="post">
        <label for="message">Enter your message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input value
        $message = $_POST['message'];
        // Display the submitted message
        echo "<p>Your message is:</p>";
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
