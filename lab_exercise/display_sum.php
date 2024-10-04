<!DOCTYPE html>
<html>
<head>
    <title>Display Sums</title>
</head>
<body>

<form method="post">
    <input type="submit" value="Display Sums">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sum($x, $y) {
        return $x + $y;
    }

    function displaySums() {
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4) . "<br>";
    }

    displaySums();
}
?>

</body>
</html>
