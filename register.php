<?php
include "config.php";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        $error = "Email already exists";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $success = "Registration successful. You can now login.";
        } else {
            $error = "Error during registration";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Register</title>
</head>
<body>
<div class="form-container">
<h2>Register</h2>
<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Register</button>
</form>
<p class="error"><?php echo $error; ?></p>
<p class="success"><?php echo $success; ?></p>
<a href="login.php">Login </a>
</div>
</body>
</html>
