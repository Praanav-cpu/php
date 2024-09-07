<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Control Demo</title>
</head>
<body>
    <h2>Hidden Control Demo</h2>
    <form method="post">
        <input type="hidden" name="secret" value="hidden_value">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the value of the hidden field
        $secret = $_POST['secret'];
        echo "<p>Hidden value: $secret</p>";
    }
    ?>
</body>
</html>
