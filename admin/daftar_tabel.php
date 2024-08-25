<?php

// Tahap 1 Menghubung ke basis data
$koneksi = "mysql:host=localhost;dbname=unimedia_senin";
$nama = "root";
$kata_sandi = "";

$pdo = new PDO($koneksi, $nama, $kata_sandi);


// Tahap 2 Pernyataan/Tugas SQL
$sql = "SELECT * FROM kampus";

// Tahap 3 Menjalankan pernyataan SQL
$wadah = $pdo->prepare($sql);
$wadah->execute();

?>

<h1>Daftar Kampus</h1>
<a href="form_tambah.php">Buat Universitas Baru</a>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $i = 1;
    while ($row = $wadah->fetch()):
    ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['telepon']; ?></td>
        <td>
            <a href="form_ubah.php?id=<?= $row['id'] ?>">ubah</a>
            <a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php
    $i++;
    endwhile;
    ?>
</table>