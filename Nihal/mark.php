<?php
echo "Enter Your Marks: ";
$mark = trim(fgets(STDIN));

if (is_numeric($mark)) {
    $mark = floatval($mark);
    if ($mark >= 90 && $mark <= 100) {
        echo "Grade S\n";
    } else if ($mark >= 80 && $mark < 90) {
        echo "Grade A\n";
    } else if ($mark >= 70 && $mark < 80) {
        echo "Grade B\n";
    } else if ($mark >= 60 && $mark < 70) {
        echo "Grade C\n";
    } else if ($mark >= 50 && $mark < 60) {
        echo "Grade D\n";
    } else if ($mark >= 0 && $mark < 50) {
        echo "Failed\n";
    } else {
        echo "Invalid mark\n";
    }
} else {
    echo "Please enter a valid numeric mark.\n";
}
?>