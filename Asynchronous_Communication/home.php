<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h2>Welcome to Home</h2>
    <?php
    echo "Name: {$_SESSION['name']}<br>";
    echo "Phone: {$_SESSION['phone']}<br>";
    echo "Email: {$_SESSION['email']}<br>";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>
