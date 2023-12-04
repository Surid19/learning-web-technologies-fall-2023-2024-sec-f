<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="ajax.js"></script>
</head>
<body>
    <h2>Register</h2>
    <form id="registerForm" action="process_registration.php" method="post">
        Name: <input type="text" name="name" required><br>
        Phone: <input type="text" name="phone" required><br>
        Email: <input type="text" name="email" id="email" required onblur="checkEmailAvailability(this.value)">
        <span id="emailAvailability"></span><br>
        Password: <input type="password" name="password" required><br>
        Confirm Password: <input type="password" name="confirm_password" required><br>
        <input type="submit" value="Register">
    </form>
    <a href="login.php">Login</a>
</body>
</html>
