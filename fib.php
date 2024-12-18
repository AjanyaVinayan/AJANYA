<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci Series</title>
</head>
<center>
<body>
    <h1>Fibonacci Series Generator</h1>
    <form method="post">
        <label for="number">Enter a limit:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST['number']);
        $fibonacci = [0, 1];
        $result = "0, 1"; // Initialize result string with the first two Fibonacci numbers

        // Generate Fibonacci numbers
        while (true) {
            $next = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
            if ($next > $num) {
                break;
            }
            $fibonacci[] = $next;
            $result .= ", $next"; // Concatenate the next Fibonacci number
        }

        // Display the Fibonacci series
        echo "<h2>Fibonacci Series up to $num:</h2>";
        echo $result;
    }
    ?>
    </center>
</body>
</html>
