<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Demo</title>
</head>
<body>
    <h2>Checkbox Demo</h2>
    <form method="post">
        <input type="checkbox" id="apple" name="fruits[]" value="apple">
        <label for="apple">Apple</label><br>

        <input type="checkbox" id="banana" name="fruits[]" value="banana">
        <label for="banana">Banana</label><br>

        <input type="checkbox" id="orange" name="fruits[]" value="orange">
        <label for="orange">Orange</label><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if any checkboxes are checked
        if(isset($_POST['fruits'])) {
            // Loop through each checked checkbox
            echo "<p>You selected:</p>";
            echo "<ul>";
            foreach ($_POST['fruits'] as $fruit) {
                echo "<li>$fruit</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No fruits selected.</p>";
        }
    }
    ?>
</body>
</html>
