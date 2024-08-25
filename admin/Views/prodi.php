<?php

$koneksi = "mysql:host=localhost;dbname=unimedia_senin";
$nama = "root";
$kata_sandi = "";

$pdo = new PDO($koneksi, $nama, $kata_sandi);

$sql = "SELECT * FROM prodi";

$wadah = $pdo->query($sql);

?>

<h1 class="mt-3 h2">Stok Item</h1>
<a href="index.php?page=prodi-form&action=add" class="btn btn-primary">
<span data-feather="plus-circle"></span> Buat Stok Baru</a>

<div class="table-responsive mt-3">
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Nama Barang</th>            
            <th>Tindakan</th>
        </tr>
        <?php
        $i = 0;
        while($row = $wadah->fetch()):
        $i++;
        ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row['kode']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td>
                <a href="index.php?page=prodi-form&action=edit&id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                <span data-feather="edit"></span> Ubah</a>
                    
                <a href="Process/prodi.php?action=delete&id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">
                <span data-feather="trash-2"></span> Hapus</a>
                    
            </td>            
        </tr>
        <?php endwhile; ?>
    </table>
</div>
