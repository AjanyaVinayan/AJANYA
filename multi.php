<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <center>
        <h1>Multiplication Table</h1>

        <!-- HTML Form to input number and limit -->
        <form method="POST">
            Enter number: <input type="text" name="number" required><br><br>
            Enter limit: <input type="text" name="limit" required><br><br>
            <input type="submit" value="Generate Table">
        </form>

        <br>

        <?php
        if (isset($_POST['number']) && isset($_POST['limit'])) {
            $number = intval($_POST['number']);
            $limit = intval($_POST['limit']);
            
            // Check if inputs are valid numbers
            if ($number <= 0 || $limit <= 0) {
                echo "<p>Please enter positive values for both number and limit.</p>";
            } else {
                // Generate and display multiplication table
                echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
                echo "<tr><th>Multiplication</th><th>Result</th></tr>";

                for ($i = 1; $i <= $limit; $i++) {
                    echo "<tr><td>" . $number . " x " . $i . "</td><td>" . ($number * $i) . "</td></tr>";
                }

                echo "</table>";
            }
        }
        ?>

    </center>
</body>
</html>
