<?php
$action = $_GET['action'];
if($_GET['action'] == "add"){
    $page_title = "Buat Program Studi Baru";

    $kode = "";
    $nama = "";
    $id = "";
}elseif($_GET['action'] == "edit"){
    $page_title = "Ubah Program Studi";

    $koneksi = "mysql:host=localhost;dbname=unimedia_senin";
    $nama = "root";
    $kata_sandi = "";

    $pdo = new PDO($koneksi, $nama, $kata_sandi);

    $sql = "SELECT * FROM prodi WHERE id = ?";
    $row = $pdo->prepare($sql);
    $row->execute([$_GET['id']]);
    $row = $row->fetch();

    $kode = $row['kode'];
    $nama = $row['nama'];
    $id = $row['id'];
}
?>

<h1 class="h2 mt-3"><?= $page_title; ?></h1>
<form action="Process/prodi.php?action=<?= $action; ?>" method="post">
    <div class="form-group">
        <label>Kode</label>
        <input type="text" name="kode" value="<?= $kode; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Nama Prodi</label>
        <input type="text" name="nama" value="<?= $nama; ?>" class="form-control" />
    </div>
    <input type="hidden" name="id" value="<?= $id; ?>" />
    <button type="submit" class="btn btn-success">Simpan</button>
</form>