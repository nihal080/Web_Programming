<!DOCTYPE html>
<html>
<head>
    <title>Enter Your Marks</title>
</head>
<body>
    <h2>Enter Your Marks</h2>
    <form method="post" action="">
        <label for="marks">Marks:</label>
        <input type="text" id="marks" name="marks" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mark = trim($_POST['marks']);

        if (is_numeric($mark)) {
            $mark = floatval($mark);
            if ($mark >= 90 && $mark <= 100) {
                echo "Grade S";
            } else if ($mark >= 80 && $mark < 90) {
                echo "Grade A";
            } else if ($mark >= 70 && $mark < 80) {
                echo "Grade B";
            } else if ($mark >= 60 && $mark < 70) {
                echo "Grade C";
            } else if ($mark >= 50 && $mark < 60) {
                echo "Grade D";
            } else if ($mark >= 0 && $mark < 50) {
                echo "Failed";
            } else {
                echo "Invalid mark";
            }
        } else {
            echo "Please enter a valid numeric mark.";
        }
    }
    ?>
</body>
</html>