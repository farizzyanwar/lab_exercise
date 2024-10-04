<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility Checker</title>
</head>
<body>

<!-- HTML Form for User Input -->
<form method="post">
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age" required>
    <input type="submit" value="Check Eligibility">
</form>

<?php
// This section will execute after the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the age input from the form
    $age = (int)$_POST['age']; 

    // Function to check voting eligibility
    function checkVotingEligibility($age) {
        if ($age >= 18) {
            echo "<p>You are eligible to vote.</p>";
        } else {
            echo "<p>You are not eligible to vote.</p>";
        }
    }

    // Call the function with the user input
    checkVotingEligibility($age);
}
?>

</body>
</html>
