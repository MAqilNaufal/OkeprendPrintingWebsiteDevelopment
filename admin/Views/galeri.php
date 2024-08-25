<?php

// 1. Koneksi DB
require 'functions.php';
$pdo = koneksiDb();


// 2. SQL
$sql = "SELECT 
            mahasiswa.id,
            mahasiswa.nim,
            mahasiswa.nama AS nama_mhs,
            mahasiswa.foto,
            prodi.nama AS nama_prodi
        FROM mahasiswa
        JOIN prodi
        ON mahasiswa.prodi_id = prodi.id";

$hasil = $pdo->query($sql);

?>

<h1 class="mt-3 h2">Invoice List</h1>

<div class="table-responsive mt-3">
    <table class="table">
        <tr>
            <th style="font-size: 20px">No.</th>
            <th  style="text-align: center; font-size: 20px;" >Foto & Nama(NIM)</th>
        </tr>

        <?php
        $i = 0;
        while($row = $hasil->fetch()):
        $i++;
        ?>
        <tr>
            <td style="font-size: 50px"><?= $i; ?></td>
            <td>
                <!-- ?php if(file_exists("uploads/" . $row['nim'] . ".jpg")): ?> -->
				<figure  align="center">
					<img src="<?= $row['foto']; ?>" height= "360px" width= "360px">
					<figcaption style="text-align: center; font-size: 25px"><?= $row['nama_mhs']; ?>(<?= $row['nim']; ?>)</figcaption>
				</figure>
                <!-- //?php endif; ?> -->
            </td>                    
        </tr>
        <?php endwhile; ?>
    </table>
</div>