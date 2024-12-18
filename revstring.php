<!DOCTYPE html>
<html lang="en">
<head><center>
    <meta charset="UTF-8">
    <title>String Reversal</title>
</head>
<body>
    <h1>Reverse a String</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    // Function to reverse a string
    function reverseString($str) {
        return strrev($str); // Using PHP's built-in strrev function
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = htmlspecialchars($_POST['inputString']);
        $reversedString = reverseString($inputString);
        
        // Display the reversed string
        echo "<h2>Reversed String:</h2>";
        echo "<p>$reversedString</p>";
    }
    ?>
    </center>
</body>
</html>
