<!DOCTYPE html>
<html>
<head>
    <title>Pattern Generator</title>
</head>
<body>

<form method="post">
    <input type="submit" value="Generate Pattern">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function createPattern() {
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    createPattern();
}
?>

</body>
</html>
