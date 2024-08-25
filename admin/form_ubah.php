<?php
// Tahap 1 Menghubung ke basis data
$koneksi = "mysql:host=localhost;dbname=unimedia_senin";
$nama = "root";
$kata_sandi = "";

$pdo = new PDO($koneksi, $nama, $kata_sandi);


// Tahap 2 Pernyataan/Tugas SQL
$sql = "SELECT * FROM kampus
        WHERE id = ?";

// Tahap 3 Menjalankan pernyataan SQL
$wadah = $pdo->prepare($sql);
$wadah->execute([$_GET['id']]);

// Tahap 4 Menampilkan row pernyataan SQL
$row = $wadah->fetch();
?>

<h1>Ubah Kampus</h1>
<form action="proses_ubah.php" method="post">
    Nama:
    <input type="text" name="nama" value="<?= $row['nama'];
    ?>" />
    <br />
    <br />
    Alamat:
    <input type="text" name="alamat" value="<?= $row['alamat'];
    ?>" />
    <br />
    <br />
    Telepon:
    <input type="number" name="telepon" value="<?= $row['telepon'];
    ?>" />
    <br />
    <br />
    <input type="hidden" name="id" value="<?= $row['id']; 
    ?>" />
    <button type="submit">Simpan Perubahan</button>
</form>