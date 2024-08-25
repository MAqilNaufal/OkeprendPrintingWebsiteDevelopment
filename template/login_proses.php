<?php
require '../admin/conn.php';

session_start();

$username = $_POST['uname'];
$password = $_POST['upass'];


$sql = "SELECT * FROM users WHERE username=?";
$result = $conn->prepare($sql);
$result->execute([$username]);

if($row= $result->fetch()){
  if (password_verify($password, $row['password'])){
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['user_id'] = $row['id'];
    // echo $_SESSION['user_id'];
   header("Location: /UAS7/admin/");
  }else{
    header('Location: login.php');
  }
}else{
  header('Location: login.php');
}

?>