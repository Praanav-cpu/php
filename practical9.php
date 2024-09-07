<?php

// Define a variable
$num = 5;

// Pre-increment (++$num)
echo "Pre-increment: " . ++$num . "<br>"; // Increments $num by 1 and then returns the incremented value

// Post-increment ($num++)
echo "Post-increment: " . $num++ . "<br>"; // Returns the current value of $num and then increments it by 1

// After post-increment, $num is now 7
echo "After post-increment, num is now: $num <br>";

// Pre-decrement (--$num)
echo "Pre-decrement: " . --$num . "<br>"; // Decrements $num by 1 and then returns the decremented value

// Post-decrement ($num--)
echo "Post-decrement: " . $num-- . "<br>"; // Returns the current value of $num and then decrements it by 1

// After post-decrement, $num is now 5
echo "After post-decrement, num is now: $num <br>";

?>
