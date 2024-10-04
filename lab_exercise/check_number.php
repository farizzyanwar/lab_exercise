<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" step="any" required>
    <input type="submit" value="Check Number">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    function checkNumber($number) {
        if ($number > 0) {
            return "The number is positive.";
        } elseif ($number < 0) {
            return "The number is negative.";
        } else {
            return "The number is zero.";
        }
    }

    echo "<p>" . checkNumber($number) . "</p>";
}
?>

</body>
</html>
