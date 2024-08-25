<?php
require 'conn.php';

$username = $_POST['uname'];
$password = password_hash($_POST['upass'], PASSWORD_BCRYPT);
$role = $_POST['role'];

$sql = "INSERT INTO users(username, password, role) 
        VALUES (?, ?, ?)";
$result = $conn->prepare($sql);
$result->execute([$username, $password, $role]);

header('Location: login.php');
?>