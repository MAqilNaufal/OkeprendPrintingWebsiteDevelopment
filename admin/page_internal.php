<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header('Location: login.php');
}
?>

<h1>Page Internal</h1>
<h2>Halaman ini dapat diakses oleh usernya yang sudah login, yaitu dosen dan mahasiswa</h2>

<?php if($_SESSION['role'] == "dosen"){ ?>
<a href="./page_dosen.php">Page Admin</a>
<?php } ?>

<?php if($_SESSION['role'] == "mahasiswa"){?>
<a href="./page_mahasiswa.php">Page User</a>
<?php } ?>

<a href="Views/logout.php">Page logout</a>