<?php
session_start();

// Establish a database connection
$conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = password_hash(mysqli_real_escape_string($conn, $_POST["password"]), PASSWORD_DEFAULT);
    // Additional fields can be added as needed

    // Sign up logic
    $sql = "INSERT INTO signup (email, password, user_type) VALUES ('$email', '$password', 'student')";

    if (mysqli_query($conn, $sql)) {
        echo "Sign up successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
