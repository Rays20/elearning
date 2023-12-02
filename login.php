<?php
session_start();

// Establish a database connection
$conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["mail"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Check if the entered email and password match the allowed values
    if ($email == "ABC@gmail.com" && $password == "111AAA") {
        // Store user information in session (assuming you need this information)
        $_SESSION["user_email"] = $email;

        // Redirect to the dashboard
        header("Location: dashboard.html");
        exit();
    } else {
        // Check if the entered email and password exist in the signup table
        $sql = "SELECT * FROM signup WHERE mail = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                // Store user information in session
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_email"] = $row["email"];

                // Redirect to student.html
                header("Location: student.html");
                exit();
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
