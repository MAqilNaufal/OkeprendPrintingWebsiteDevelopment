<?php

// 1. Koneksi DB
$koneksi = "mysql:host=localhost;dbname=unimedia_senin";
$nama = 'root';
$kata_sandi = '';
$pdo = new PDO($koneksi, $nama, $kata_sandi);

// 2. SQL
$sql = "SELECT * FROM galeri";

// 3. Prepare & Execute
$row = $pdo->query($sql);

// 4. Menampilkan row query
?>

<table border="1">
    <tr>
        <th>No.</th>
        <th>Judul</th>
        <th>Gambar</th>
    </tr>
    <?php
    $i=1;
    while($row = $row->fetch());
    $i++;
    ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row['judul']; ?></td>
        <td>
            <img src="<?= $row['foto']; ?>" />
        </td>
    </tr>
    <?php endwhile; ?>
</table>