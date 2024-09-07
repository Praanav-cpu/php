<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Field Demo</title>
</head>
<body>
    <h2>Text Field Demo</h2>
    <form method="post">
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input value
        $name = $_POST['name'];
        // Display the submitted name
        echo "<p>Your name is: $name</p>";
    }
    ?>
</body>
</html>
