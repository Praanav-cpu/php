<?php

// Function to calculate grade based on percentage
function calculateGrade($percentage) {
    if ($percentage >= 80) {
        return 'A';
    } elseif ($percentage >= 60 && $percentage < 80) {
        return 'B';
    } elseif ($percentage >= 40 && $percentage < 60) {
        return 'C';
    } elseif ($percentage >= 33 && $percentage < 40) {
        return 'D';
    } else {
        return 'Fail';
    }
}

// Taking input for three subjects' marks
$subject1 = 85; // You can replace these hardcoded values with user input
$subject2 = 75;
$subject3 = 90;

// Calculating total marks
$totalMarks = $subject1 + $subject2 + $subject3;

// Calculating percentage
$percentage = ($totalMarks / 300) * 100;

// Displaying mark sheet
echo "Subject 1 Marks: $subject1 <br>";
echo "Subject 2 Marks: $subject2 <br>";
echo "Subject 3 Marks: $subject3 <br>";
echo "Total Marks: $totalMarks <br>";
echo "Percentage: $percentage% <br>";

// Calculating grade
$grade = calculateGrade($percentage);
echo "Grade: $grade <br>";

?>
