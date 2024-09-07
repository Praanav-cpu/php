<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Demo</title>
</head>
<body>
    <h2>Radio Button Demo</h2>
    <form method="post">
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if radio button is selected
        if(isset($_POST['gender'])) {
            // Retrieve the selected gender
            $gender = $_POST['gender'];
            echo "<p>You selected: $gender</p>";
        } else {
            echo "<p>No gender selected.</p>";
        }
    }
    ?>
</body>
</html>
