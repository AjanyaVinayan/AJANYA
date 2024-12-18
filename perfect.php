<!DOCTYPE html>
<html lang="en">
<head><center>
    <meta charset="UTF-8">
    <title>Number Classification</title>
</head>
<body>
    <h1>Check Number Type</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    // Function to classify the number
    function classifyNumber($num) {
        $sum = 0;
        
        // Find the sum of proper divisors
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $sum += $i;
            }
        }

        // Classify the number
        if ($sum == $num) {
            return "Perfect Number";
        } elseif ($sum > $num) {
            return "Abundant Number";
        } else {
            return "Deficient Number";
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); // Get user input and convert to integer
        $result = classifyNumber($number); // Classify the number
        
        // Display the result
        echo "<h2>Result:</h2>";
        echo "<p>The number $number is a $result.</p>";
    }
    ?>
    </center>
</body>
</html>
