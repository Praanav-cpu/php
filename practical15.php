<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Box Demo</title>
</head>
<body>
    <h2>List Box Demo</h2>
    <form method="post">
        <label for="cars">Choose a car:</label><br>
        <select id="cars" name="car">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if a car is selected
        if(isset($_POST['car'])) {
            // Retrieve the selected car
            $car = $_POST['car'];
            echo "<p>You selected: $car</p>";
        } else {
            echo "<p>No car selected.</p>";
        }
    }
    ?>
</body>
</html>
