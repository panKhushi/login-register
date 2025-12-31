<?php
$conn = mysqli_connect("localhost", "root", "Khushi@09", "login_system");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
