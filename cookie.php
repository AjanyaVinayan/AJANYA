<?php
// Check if the "last_visit" cookie is set
if (isset($_COOKIE['last_visit'])) {
    $lastVisit = $_COOKIE['last_visit'];
} else {
    $lastVisit = "This is your first visit.";
}

// Set the current date-time to store in the cookie
$currentDateTime = date('Y-m-d H:i:s');

// Store the current date-time in a cookie that expires in 30 days
setcookie('last_visit', $currentDateTime, time() + (30 * 24 * 60 * 60), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visit Date-Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome</h1>
        <p><strong>Last visited on:</strong> <?php echo $lastVisit; ?></p>
        <p><strong>Current visit time:</strong> <?php echo $currentDateTime; ?></p>
    </div>
</body>
</html>
