<?php
try {
// Tahap 1 Menghubung ke basis data
$koneksi = "mysql:host=localhost;dbname=unimedia_senin";
$nama = "root";
$kata_sandi = "";

$pdo = new PDO($koneksi, $nama, $kata_sandi);


// Tahap 2 Pernyataan/Tugas SQL
$sql = "UPDATE kampus
        SET nama = ?,
            alamat = ?,
            telepon = ?
        WHERE id = ?";

// Tahap 3 Menjalankan pernyataan SQL
$wadah = $pdo->prepare($sql);
$data = [
    $_POST['nama'],
    $_POST['alamat'],
    $_POST['telepon'],
    $_POST['id']
];
$wadah->execute($data);
} catch(PDOException $e) {
    echo $e->getMessage();
}