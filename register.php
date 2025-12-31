<?php
include "db.php";

/* Get data */
$username = trim($_POST['username']);
$email    = trim($_POST['email']);
$password = $_POST['password'];
$role     = $_POST['role'];

/* Check existing user */
$check = "SELECT id FROM users WHERE username='$username' OR email='$email'";
$res = mysqli_query($conn, $check);

if (mysqli_num_rows($res) > 0) {
    echo "Username or Email already exists";
    exit;
}

/* Hash password */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* Insert */
$sql = "INSERT INTO users (username, email, password, role)
        VALUES ('$username', '$email', '$hashedPassword', '$role')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful. Please login.";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
