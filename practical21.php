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
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    // Custom array to store form data
    $formData = array();

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form input values
        $formData['name'] = $_POST['name'];
        $formData['email'] = $_POST['email'];
        $formData['message'] = $_POST['message'];

        // Display the submitted data
        echo "<h3>Submitted Form Data:</h3>";
        echo "<p>Name: " . $formData['name'] . "</p>";
        echo "<p>Email: " . $formData['email'] . "</p>";
        echo "<p>Message: " . $formData['message'] . "</p>";
    }
    ?>
</body>
</html>
