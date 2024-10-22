<?php
require_once("include/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST['username'];
    $admin_email = $_POST['email'];
    $admin_password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

    // Insert into the database
    $sql = "INSERT INTO admins (username, email, password) VALUES ('$admin_username', '$admin_email', '$hashed_password')";

    if ($con->query($sql) === TRUE) 
    {
        header("location:view.php");
    } else 
    {
         header("location:signup.php"). $con->error;
    }
}
// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="style.css">
 
</head>

<body style="background-image: url('Wallpaper.jpeg')">
    <main>
        <form action="signup.php" method="POST"> 
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
    </main>

    <!-- <footer>
        <p>&copy; 2024 Admin Dashboard</p>
    </footer> -->
</body>
</html>
