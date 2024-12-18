<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data and sanitizing it
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $fathers_name = htmlspecialchars($_POST['fathers_name']);
    $mothers_name = htmlspecialchars($_POST['mothers_name']);
    $phno = htmlspecialchars($_POST['phno']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $hobby = htmlspecialchars($_POST['hobby']);
    $qualification = htmlspecialchars($_POST['qualification']);

    // Display the submitted data in a table
    echo "<div style='text-align:center;' class='container'>";
    echo "<h2>Bio Data Submitted</h2>";
    echo "<table border='1' style='margin: 0 auto; border-collapse: collapse; width: 80%;'>";
    echo "<tr><th>Field</th><th>Details</th></tr>";
    
    // Display each field value in a table row
    echo "<tr><td><strong>Name</strong></td><td>$name</td></tr>";
    echo "<tr><td><strong>Age</strong></td><td>$age</td></tr>";
    echo "<tr><td><strong>Date of Birth</strong></td><td>$dob</td></tr>";
    echo "<tr><td><strong>Gender</strong></td><td>$gender</td></tr>";
    echo "<tr><td><strong>Father's Name</strong></td><td>$fathers_name</td></tr>";
    echo "<tr><td><strong>Mother's Name</strong></td><td>$mothers_name</td></tr>";
    echo "<tr><td><strong>Phone Number</strong></td><td>$phno</td></tr>";
    echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>Address</strong></td><td>$address</td></tr>";
    echo "<tr><td><strong>Hobby</strong></td><td>$hobby</td></tr>";
    echo "<tr><td><strong>Qualification</strong></td><td>$qualification</td></tr>";
    
    echo "</table>";
    echo "</div>";
}
?>
