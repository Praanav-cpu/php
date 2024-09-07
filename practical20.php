<?php

// Redirect to a different page
header("Location: http://example.com/newpage.php");
exit(); // Ensure that no other output is sent to the browser after the header

?>
