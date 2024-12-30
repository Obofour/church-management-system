<?php
// login.php

require_once("include/connection.php");

// Start session
session_start();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];

    // Retrieve user from the database
    $sql = "SELECT id, username, password FROM admins WHERE email='$login_email'";
    $result = mysqli_query($con,$sql);
    // $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User found
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($login_password, $hashed_password)) {
            // Set session variables
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_username'] = $row['username'];
            header("Location:dashboard.html"); // Redirect to admin dashboard
            exit();
        } else {
            header("location:error.php");
        }
    } else {
        echo "No account found with that email.";
    }
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('Wallpaper.jpeg');">
    <!-- <header>
        <h1>Admin Login</h1>
    </header> -->

    <main>
        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </main>
<!-- 
    <footer>
    <small><p style="margin-left: 200px;">Copyright &copy; 2024. Designed by <strong>Group 10</strong></p></small>
    </footer> -->
</body>
</html>
