<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<form method="post">
    <label for="num1">Enter first number:</label>
    <input type="number" name="num1" id="num1" step="any" required><br><br>

    <label for="num2">Enter second number:</label>
    <input type="number" name="num2" id="num2" step="any" required><br><br>

    <label for="operation">Select operation:</label>
    <select name="operation" id="operation" required>
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $operation = $_POST['operation'];

    function calculator($num1, $num2, $operation) {
        switch ($operation) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 == 0) {
                    return "Error: Division by zero!";
                }
                return $num1 / $num2;
            default:
                return "Invalid operation.";
        }
    }

    echo "<p>Result of $num1 $operation $num2 is: " . calculator($num1, $num2, $operation) . "</p>";

}
?>

</body>
</html>
