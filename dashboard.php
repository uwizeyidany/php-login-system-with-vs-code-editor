<?php
session_start();
include "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT username FROM users WHERE id=" . $_SESSION["user_id"];
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Dashboard</title>
</head>
<body>
<div class="form-container">
<h2>Welcome, <?php echo htmlspecialchars($user["username"]); ?></h2>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
