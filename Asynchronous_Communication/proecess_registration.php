<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user data from the registration form
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // TODO: Validate the data (e.g., check if the email is unique)

    // Store user data in the database
    $servername = "communication";
    $username = "toyab";
    $password = "123";
    $dbname = "persondb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO persons (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // If someone tries to access this file directly without submitting the form, redirect to register.php
    header("Location: register.php");
    exit();
}
?>
