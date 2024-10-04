<!DOCTYPE html>
<html>
<head>
    <title>Number Display</title>
</head>
<body>

<form method="post">
    <input type="submit" value="Display Numbers">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function displayNumbers() {
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
            if ($i < 10) {
                echo "-";
            }
        }
        echo "<br>";
    }

    displayNumbers();
}
?>

</body>
</html>
