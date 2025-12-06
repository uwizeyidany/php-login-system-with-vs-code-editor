<?php
session_start();
require_once "config.php"; // MUST be mysqli connection ($conn)

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Prepare statement
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Bind results
    $stmt->bind_result($id, $db_email, $db_password);
    $stmt->fetch();

    // DEBUG MODE
    echo "<pre>";
    echo "Entered Email: $email\n";
    echo "Entered Password: $password\n";

    if ($db_email === null) {
        echo "User Found: NO\n";
        exit;
    } else {
        echo "User Found: YES\n";
    }

    echo "Hash From DB: $db_password\n";
    echo "Verify: " . (password_verify($password, $db_password) ? "MATCH" : "NO MATCH") . "\n";
    echo "</pre>";
    // END DEBUG

    // Verify password
    if (password_verify($password, $db_password)) {
        $_SESSION["user_id"] = $id;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <form method="POST">
        <h2>Login</h2>

        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
