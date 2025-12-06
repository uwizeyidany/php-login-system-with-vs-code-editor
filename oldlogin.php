<!-- <?php
session_start();
include "config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = trim($_POST["password"]);

    echo "Password entered: '$password'<br>";
echo "Hash from DB: '".$user["password"]."'<br>";


    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Email not found";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Login</title>
<style>
    img{
        background-attachment: fixed;
        height: 250pxpx;
        width: 250px;
        padding: 33px 36px;
    }
    fieldset{
        width: 300px;
        height: 300px;
        padding:main menu;
    }
    

</style>
</head>
<body><fieldset>
    <div class="img container" >
        <img src="pr danny.png" alt="main menu">
    </div></fieldset>
<div class="form-container">
<h2>Login</h2>
<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>
<p class="error"><?php echo $error; ?></p>
</div>
<div class="social-login">
    <p>Or login with:</p>
    <button onclick="alert('Google login placeholder')">Google</button>
    <button onclick="alert('Facebook login placeholder')">Facebook</button>
    <button onclick="alert('Instagram login placeholder')">Instagram</button>
    <button onclick="alert('Instagram login placeholder')">Login with Instagram</button>

</div>
<!-- <div class="social-login"> -->
    <!-- <p>Or login with:</p> -->
    <!-- <button onclick="alert('Google login placeholder')">Login with Google</button> -->
    <!-- <button onclick="alert('Facebook login placeholder')">Login with Facebook</button> -->
<!-- </div> -->

<!-- <a href="register.php"><button>well</button></a> -->


</body>
</html> -->
