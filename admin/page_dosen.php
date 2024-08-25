<?php
session_start();
//cek session key
if(isset($_SESSION['role'])){
  //cek value key
  if($_SESSION['role'] != 'dosen'){
    header('Location: page_internal.php');
  }
}else{
  //jika cek session key 'role' tidak ada maka redirect ke bagian login
  header('Location: login.php');
}
?>

<h1>Page Admin</h1>
<h1>Selamat datang <?php
    echo $nama; ?></h1>
