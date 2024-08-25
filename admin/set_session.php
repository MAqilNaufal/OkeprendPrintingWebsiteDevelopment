<?php
session_start();

//set session
$_SESSION['nama'] = "John Thor";
$_SESSION['user_id'] = 5;
$_SESSION['role'] = "mahasiswa";
echo "Session 'nama'  dan 'user_id' sudah di set. <br>";



//cek session
echo $_SESSION['nama'];
echo "<br>";
echo $_SESSION['user_id'];
echo $_SESSION['role'];
if($_SESSION['role'] == "dosen"){
  echo "Role dosen";
}elseif ($_SESSION['role'] == "mahasiswa") {
  echo "Role mahasiswa";
}

//clear session
session_unset();
session_destroy();

//cek session

echo $_SESSION['nama'];
echo "<br>";
echo $_SESSION['user_id'];
echo $_SESSION['role'];
if($_SESSION['role'] == "dosen"){
  echo "Role dosen";
}elseif ($_SESSION['role'] == "mahasiswa") {
  echo "Role mahasiswa";
}


//session terakhirnya tidak dapat di akses karena sudah di hapus seluruh variable dan session di berhentikan