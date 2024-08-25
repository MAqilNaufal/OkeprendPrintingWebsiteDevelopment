<?php

// <input type="text" name="judul" />
// $_POST['judul'];

// <input type="text" name="foto" />
//$_FILES['foto']['name'];
//$_FILES['foto']['type'];
//echo $_FILES['foto']['tmp_name'];
//$_FILES['foto']['error'];
//$_FILES['foto']['size'];

$ext = explode(".", $_FILES['foto']['name']);
$ext = end($ext);
$ext = strtolower($ext);
echo "<pre> File has been uploaded successfully";
var_dump($ext);

// Cara 2:
$ext_boleh = ["jpg", "jpeg", "png", "gif"];
$max_size = 2*1024*1024;
if( in_array($ext, $ext_boleh) && $_FILES['foto']['size']
    <= $max_size) {
    // File boleh di upload
    echo "";
    $tmp = $_FILES['foto']['tmp_name'];
    $permanent = "uploads/" . $_FILES['foto']['name'];
    move_uploaded_file($tmp, $permanent);

    // 1. Koneksi DB
    $koneksi = "mysql:host=localhost;dbname=unimedia_senin";
    $nama = 'root';
    $kata_sandi = '';

    $pdo = new PDO($koneksi, $nama, $kata_sandi);

    // 2. SQL
    $sql = "INSERT INTO galeri (judul, foto)
            VALUES (?, ?)";

    // 3. Prepare & Execute
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['judul'], $permanent]);
}
