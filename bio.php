<CENTER>
<?php
if ($_POST) {
    echo "<h1><u>Biodata</u></h1>";
    echo "Name: " . $_POST["fname"] . "<br>";
    echo "Address: " . $_POST["address"] . "<br>";
    echo "Age: " . $_POST["age"] . "<br>";
    echo "Mobile: " . $_POST["phone"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Qualification: " . $_POST["education"] . "<br>";
}
?>
</CENTER>