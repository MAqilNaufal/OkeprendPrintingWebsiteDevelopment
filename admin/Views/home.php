<html>


<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header('Location: login.php');
}

// 1. Koneksi DB
require 'functions.php';
$pdo = koneksiDb();
?>


<div class="container" align="center">
<h1>Page Internal</h1>
<br>
<h2>Selamat datang</h2>

<?php if($_SESSION['role'] == "dosen"){ ?>

<a href="../admin/page_dosen.php" class="btn btn-primary bg-dark">Page Admin</a>

<?php } ?>

<?php if($_SESSION['role'] == "mahasiswa"){?>

<a href="../index.php" class="btn btn-primary bg-dark" >Page User</a>

<?php } ?>

</div>
</html>