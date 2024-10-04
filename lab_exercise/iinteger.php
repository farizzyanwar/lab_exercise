<!DOCTYPE html>
<html>
<head>
    <title>Area Calculator</title>
</head>
<body>

<form method="post">
    <label for="length">Enter length:</label>
    <input type="number" name="length" id="length" step="any" required><br><br>

    <label for="width">Enter width:</label>
    <input type="number" name="width" id="width" step="any" required><br><br>

    <input type="submit" value="Calculate Area">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = (float)$_POST['length'];
    $width = (float)$_POST['width'];

    function calculateArea($length, $width) {
        return $length * $width;
    }

    echo "<p>The area of $length * $width is: " . calculateArea($length, $width) . "</p>";
}
?>

</body>
</html>
