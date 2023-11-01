<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    $errors = [];

    if (!password_verify($current_password, $user->getPasswordHash())) {
        $errors[] = "Current password is incorrect.";
    }

    if (strlen($new_password) < 8) {
        $errors[] = "New password must be at least 8 characters long.";
    }

    if ($new_password !== $confirm_password) {
        $errors[] = "New password and confirmation do not match.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        echo "Password changed successfully.";
    } else {
        
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
