<?php
session_start();
//cek session key
if(isset($_SESSION['role'])){
  //cek value key
  if($_SESSION['role'] != 'mahasiswa'){
    header('Location: page_internal.php');
  }
}else{
  //jika cek session key 'role' tidak ada maka redirect ke bagian login
  header('Location: login.php');
}
?>

<h1>Page User</h1>
<h1>Halaman ini hanya bisa di akses oleh User</h1>