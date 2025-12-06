<?php
$hash = '$2y$10$uJ1hZ9vU2rZ3e9YpQOZV.uG2.pP1NQX2rZ3e9YpQOZV.uG2.pP1NQX2I/kqvH4XG.lwW8Xh2M5n6';
$password = '123456';

if (password_verify($password, $hash)) {
    echo "Password is correct!";
} else {
    echo "Password is invalid!";
}
?>
