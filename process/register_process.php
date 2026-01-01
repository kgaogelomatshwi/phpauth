<?php
require_once "../config/db.php";

$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullname, $email, $password);

if ($stmt->execute()) {
    header("Location: ../public/login.php");
} else {
    echo "Registration failed.";
}
