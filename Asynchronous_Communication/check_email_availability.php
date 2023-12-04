<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["email"])) {
    $email = $_GET["email"];

    // TODO: Validate the email format

    // Check if the email is available in the database
    $servername = "communication";
    $username = "toyab";
    $password = "123";
    $dbname = "persondb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM persons WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email already exists, not available
        echo "Email not available";
    } else {
        // Email is available
        echo "Email available";
    }

    $conn->close();
} else {
    // If someone tries to access this file directly without a valid email parameter, return an error
    echo "Invalid request";
}
?>
